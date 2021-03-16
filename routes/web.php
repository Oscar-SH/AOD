<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('informacion.index');
});
//"Vistas"
Route::resource('fraction','FractionController');
Route::resource('day','DayController');
Route::resource('corte', 'CorteController');
//Exportar en "Day"
Route::get('day-pdf','DayController@exportToPDF')->name('day.pdf');
Route::get('/dayXLS','DayController@exportToXLS');
Route::get('/dayCSV','DayController@exportToCSV');
//Exportar en "Fraction"
Route::get('fraction-pdf','FractionController@exportToPDF')->name('fraction.pdf');
Route::get('/fractionXLS','FractionController@exportToXLS');
Route::get('/fractionCSV','FractionController@exportToCSV');
//Exportar en "Cortes"
Route::get('corte-pdf','CorteController@exportToPDF')->name('corte.pdf');
Route::get('/corteXLS','CorteController@exportToXLS');
Route::get('/corteCSV','CorteController@exportToCSV');
//Rutas de estaticas
Route::get('informacion.index','InformacionController@index')->name('informacion.index');
Route::get('informacion.acercaDe','InformacionController@acercaDe')->name('informacion.acercaDe');
Route::get('informacion.politicas','InformacionController@politicas')->name('informacion.politicas');
Route::get('informacion.contacto','InformacionController@contacto')->name('informacion.contacto');
Route::get('informacion.privacidad','InformacionController@privacidad')->name('informacion.privacidad');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Rutas para graficas
Route::get('graficas.graficarDias','GraficasController@graficarDias')->name('day.graficar');
Route::get('graficas.graficarFraccion','GraficasController@graficarFraccions')->name('fraccion.graficar');
Route::get('graficas.graficarCortes','GraficasController@graficarCortes')->name('corte.graficar');
