<?php

namespace App\Http\Controllers;

use App\Sesiones;
use Illuminate\Http\Request;

use App\Cursos;
use App\Actividades;

class SesionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		
		$characters = Actividades::all();
		return view('sesionesCrear')->withCharacters($characters);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		
		$sesion = Sesiones::create($request->all());
		return redirect()->route('Sesiones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function show(Sesiones $sesiones)
    {
        //
		
		return view('sesiones');
    }
	
	public function show2(Sesiones $sesiones)
    {
        //
		$characters = Sesiones::all();
		$activ = Actividades::all();
		return view('sesionesVer', compact('characters', 'activ'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function edit(Sesiones $sesiones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sesiones $sesiones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sesiones  $sesiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sesiones $sesiones)
    {
        //
    }
}
