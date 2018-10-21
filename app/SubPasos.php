<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubPasos extends Model
{
    //
	
	protected $fillable = [
		'name',
		'desc',
		'pasos',
		'answer',
		'order'
	];
	
	protected $table = 'sub_pasos';
}
