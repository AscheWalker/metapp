<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasos extends Model
{
    //
	
	protected $fillable = [
		'name',
		'desc',
		'actividad',
		'order'
	];
	
	protected $table = 'pasos';
}
