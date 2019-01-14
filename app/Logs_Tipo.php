<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs_Tipo extends Model
{
    //
	protected $fillable = [
        'Id-tipo',
		'Descripcion'
    ];

	protected $table = 'logs__tipos';
