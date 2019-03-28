<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicamentos extends Model
{
    protected $table = "medicamentos";
    public $timestamps = false;
	protected $fillable =[		
		'nombre',
		'descripcion',		
		'urlfoto', 	
		'Mg',
		'tipo',
	];
}
