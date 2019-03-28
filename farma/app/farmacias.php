<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class farmacias extends Model
{
    protected $table = "farmacias";
    protected $fillable = [        
        'nombreFarma', 
        'descripcion',
        'urlfoto',        
    ];
}
