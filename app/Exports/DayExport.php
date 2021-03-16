<?php

namespace App\Exports;

use App\Day;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class DayExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $day=DB::table('days')->select('id','nombre','puesto','dias','pago','total')->get();
        return $day;
    }

    public function headings():array{
        return['ID','NOMBRE DEL EMPLEADO:','PUESTO:','DIAS LABORADOS','PAGO POR DIA','TOTAL'];
    }
}
