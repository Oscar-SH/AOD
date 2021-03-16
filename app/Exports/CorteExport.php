<?php

namespace App\Exports;

use App\Corte;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class CorteExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $corte=DB::table('cortes')->select('Orden','Largo','Ancho','Proporcion','Recibido','Consumido','Retaceria','Faltante','Cuerpos','Lienzos','Piezas')->get();
        return $corte;
    }

    public function headings():array{
        return['ID',
        'ORDEN',
        'LARGO',
        'ANCHO',
        'PROPORCION',
        'RECIBIDO',
        'CONSUMIDO',
        'RETACERIA',
        'FALTANTE',
        'CUERPOS',
        'LIENZOS',
        'PIEZAS'];
    }
}
