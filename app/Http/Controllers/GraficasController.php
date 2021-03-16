<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Day;
use App\Fraction;
use App\Corte;

class GraficasController extends Controller
{
    public function graficarDias(){
        $days=Day::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarDias', compact('days'));
    }

    public function graficarFraccions(){
        $fraction=Fraction::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarFraccions', compact('fraction'));
    }

    public function graficarCortes(){
        $corte=Corte::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');
        return view('graficas.graficarCortes', compact('corte'));
    }
}

