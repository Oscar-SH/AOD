<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('informacion.index');
    }

    public function contacto(){
        return view('informacion.contacto');
    }

    public function acercaDe(){
        return view('informacion.acercaDe');
    }
    public function politicas(){
        return view('informacion.politicas');
    }

    public function privacidad(){
        return view('informacion.privacidad');
    }
}