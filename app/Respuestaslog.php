<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestaslog extends Model
{
    //
	
	protected $fillable = [
		'sesion',
		'actividad',
		'paso',
		'respuesta'
	];
	
	protected $table = 'respuestaslog';
}
