<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected  $fillable = ['nombre','puesto','dias','pago','total'];
}
