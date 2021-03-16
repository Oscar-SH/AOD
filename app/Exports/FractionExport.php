<?php

namespace App\Exports;

use App\Fraction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class FractionExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $fraction=DB::table('fractions')->select('id','nombre','puesto','dias','pago','total')->get();
        return $fraction;
    }

    public function headings():array{
        return['ID','NOMBRE DEL EMPLEADO:','OPERACION:','REPETICION','PAGO POR REPETICION','TOTAL'];
    }
}
