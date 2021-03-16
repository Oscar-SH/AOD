<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DayExport;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $day = Day::latest()->paginate(5);
        return view('day.index', compact('day'))->with('i',(request()->input('page',1)-1)*5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('day.create');
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
            ]
        );
        Day::create($request->all());
        return redirect()->route('day.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        return view('day.show', compact('day'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
    {
        return view('day.edit', compact('day'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Day $day)
    {
       $request->validate(['nombre' => 'required','puesto' => 'required','dias' => 'required','pago' => 'required','total' => 'required']);

       $day->update($request->all());

       return redirect()->route('day.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function destroy(Day $day)
    {
        $day->delete();
        return redirect()->route('day.index');
    }

    public function exportToPDF(){
        $day = Day::get();
        $pdf = PDF::loadView('day.exportToPDF', compact('day'));
        return $pdf->download('NominaPorDia.pdf');
    }

    public function exportToXLS(){
        return Excel::download(new DayExport, 'Nomina_AEO.xlsx');
    }

    public function exportToCSV(){
        return Excel::download(new DayExport, 'Nomina_AEO.csv');
    }
}
