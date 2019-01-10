<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    //
	
	protected $fillable = [
		'id-sesion',
		'name'
	];
	
	protected $table = 'grupos';
}
