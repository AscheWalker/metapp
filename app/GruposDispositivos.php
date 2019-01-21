<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposDispositivos extends Model
{
    //
	protected $fillable = [
		'grupo',
		'dispositivo',
		'nombre'
	];
	
	protected $table = 'grupos_dispositivos';
}
