<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corte extends Model
{
    protected  $fillable = ['Orden','Largo','Ancho','Proporcion','Recibido','Consumido','Retaceria','Faltante','Cuerpos','Lienzos','Piezas'];
    
}
