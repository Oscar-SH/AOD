<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fraction extends Model
{
    protected  $fillable = ['nombre','puesto','dias','pago','total'];
}
