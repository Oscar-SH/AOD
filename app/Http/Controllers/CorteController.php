<?php

namespace App\Http\Controllers;

use App\Corte;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CorteExport;

class CorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corte = Corte::latest()->paginate(5);
        return view('corte.index', compact('corte'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('corte.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['Orden'=>'required','Largo'=>'required','Ancho'=>'required','Proporcion'=>'required','Recibido'=>'required','Consumido'=>'required','Retaceria'=>'required','Faltante'=>'required','Cuerpos'=>'required','Lienzos'=>'required','Piezas'=>'required']);
        Corte::create($request->all());

        return redirect()->route('corte.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function show(Corte $corte)
    {
        return view('corte.show', compact('corte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function edit(Corte $corte)
    {
        return view('corte.edit', compact('corte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corte $corte)
    {
        $request->validate(['Orden'=>'required','Largo'=>'required','Ancho'=>'required','Proporcion'=>'required','Recibido'=>'required','Consumido'=>'required','Retaceria'=>'required','Faltante'=>'required','Cuerpos'=>'required','Lienzos'=>'required','Piezas'=>'required']);

       $corte->update($request->all());

       return redirect()->route('corte.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corte $corte)
    {
        $corte->delete();
        return redirect()->route('corte.index');
    }

    public function exportToPDF(){
        $corte = Corte::get();
        $pdf = PDF::loadView('corte.exportToPDF', compact('corte'));
        return $pdf->download('Reportes De Corte.pdf');
    }

    public function exportToXLS(){
        return Excel::download(new CorteExport, 'Reportes_AEO.xlsx');
    }

    public function exportToCSV(){
        return Excel::download(new CorteExport, 'Reportes_AEO.csv');
}
}