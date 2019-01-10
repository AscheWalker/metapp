<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GruposUsuarios extends Model
{
    //
	protected $fillable = [
		'id-grupo',
		'id-usuario'
	];
	
	protected $table = 'grupos_usuarios';
}
