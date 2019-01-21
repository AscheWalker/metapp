<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    //
	protected $fillable = [
		'user',
		'dispositivo',
		'nombre'
	];
	
	protected $table = 'dispositivos';
}
