<?php

namespace App\Http\Controllers;

use App\Fraction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FractionExport;

class FractionController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fraction = Fraction::latest()->paginate(5);
        return view('fraction.index', compact('fraction'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fraction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required','puesto'=>'required','dias'=>'required','pago'=>'required','total'=>'required'
            ]);
        Fraction::create($request->all());

        return redirect()->route('fraction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function show(Fraction $fraction)
    {
        return view('fraction.show', compact('fraction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Fraction $fraction)
    {
        return view('fraction.edit', compact('fraction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fraction $fraction)
    {
        $request->validate(['nombre' => 'required','puesto' => 'required','dias' => 'required','pago' => 'required','total' => 'required']);

       $fraction->update($request->all());

       return redirect()->route('fraction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fraction  $fraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fraction $fraction)
    {
        $fraction->delete();
        return redirect()->route('fraction.index');
    }

    public function exportToPDF(){
        $fraction = Fraction::get();
        $pdf = PDF::loadView('fraction.exportToPDF', compact('fraction'));
        return $pdf->download('NominaPorFraccion.pdf');
    }

    public function exportToXLS(){
        return Excel::download(new FractionExport, 'Nomina_AEO_(POR FRACCIÓN).xlsx');
    }

    public function exportToCSV(){
        return Excel::download(new FractionExport, 'Nomina_AEO_(POR FRACCIÓN).csv');
}
}