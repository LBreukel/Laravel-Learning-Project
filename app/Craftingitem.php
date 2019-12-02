<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Craftingitem extends Model
{
    //
    protected $fillable = ['name', 'attribute', 'category', 'guidenumber','type_id'];
}
