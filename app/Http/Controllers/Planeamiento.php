<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pasos;
use App\Respuestas;
use App/Respuestaslog;

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
	
	public function checkejecucion(Request $request)
	{
		
		$respuestaslog = Respuestaslog::create($request->all());
		foreach($request->all() as $key=>$value)
		{
			$respuestas = Respuestas::where('id', (int)$value)->get();
			foreach($respuestas as $key1=>$value1)
			{
				$respuesta = $value1;
			}
			//$respuestas = array_pop(array_reverse($respuestas));
			if ($respuesta->correcto == 0)
			{
				return back();
			}
			$pasos = Pasos::where('id', (int)($respuesta->paso))->get();
			foreach($pasos as $key2=>$value2)
			{
				$paso = $value2;
			}
			//$paso = array_pop(array_reverse($pasos));
			$nexts = Pasos::where('order', ((int)($paso->order))+1)->get();
			foreach($nexts as $key3=>$value3)
			{
				$next = $value3;
			}
			//$next = array_pop(array_reverse($nexts));
			if (isset($next))
			{
				$characters = Respuestas::where('paso', (int)($next->id))->get();
				return view('ejecucion')->withCharacters($characters);
			}
			return view('home');
		}
	}
}
