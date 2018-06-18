<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pasos;
use App\Respuestas;

class Planeamiento extends Controller
{
    //
	
	public function show($actividad)
    {
        //
		
		$characters = Pasos::where('actividad', $actividad)->get();
		$error = False;
		
		return view('planeamiento')->withCharacters($characters);
    }
	
	public function check(Request $request)
	{
		
		$error = false;
		$first = 0;
		foreach($request->all() as $key=>$value)
		{
			$character = Pasos::where('id', (int)$key)->get();
			foreach($character as $key1=>$value1)
			{
				if ($value1->order != $value)
				{
					$error = true;
					return back();
				}
				
				if ($value1->order == 1)
				{
					$first = $key;
				}
			}
		}
		$characters = Respuestas::where('paso', (int)$first)->get();
		return view('ejecucion')->withCharacters($characters);
	}
}
