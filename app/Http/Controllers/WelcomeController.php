<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
	public function show()
	{
		
		$characters = [
			'Kyo Walker' => 'Tomas Walker'
			];
		
		return view('welcome')->withCharacters($characters);
	}
}
