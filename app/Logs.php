<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    //
	
	protected $fillable = [
		'Id-usuario',
		'Id-dispositivo',
		'Id-sesion',
		'Id-actividad',
		'Id-tipo',
		'Valor'
	];
	
	protected $table = 'logs';
}
