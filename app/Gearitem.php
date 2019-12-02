<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gearitem extends Model
{
    //
    protected $fillable = ['name', 'gearstats', 'category', 'gearset', 'attribute', 'guidenumber'];
}
