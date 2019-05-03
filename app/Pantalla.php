<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pantalla extends Model
{
    //
	protected $fillable = [
		'grupos',
		'valid',
		'content'
	];
	
	protected $table = 'pantallas';
}
