<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    //
	
	protected $fillable = [
		'name',
		'desc'
	];
	
	protected $table = 'actividades';
}
