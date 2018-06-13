<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesiones extends Model
{
    //
	
	protected $fillable = [
		'curso',
		'desc',
		'inicio',
		'final'
	];
	
	protected $table = 'sesiones';
}
