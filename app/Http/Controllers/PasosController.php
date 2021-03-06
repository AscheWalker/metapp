<?php

namespace App\Http\Controllers;

use App\Pasos;
use Illuminate\Http\Request;
use App\Actividades;

class PasosController extends Controller
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
    public function create(Request $request)
    {
        //
		$idActiv = $request->activId;
		//$characters = Actividades::where('id', $idActiv);
		return view('pasosCrear', compact('idActiv'));
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
		
		$pasos = Pasos::create($request->all());
		$idActiv = $request->actividad;
		$characters = Pasos::where('actividad', $idActiv)->get();
		return view('pasosVer', compact('characters', 'idActiv'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function show(Pasos $pasos)
    {
        //
		return view('pasos');
    }
	
	public function show2(Pasos $pasos, Request $request)
    {
        //
		$idActiv = $request->activId;
		$characters = Pasos::where('actividad', $idActiv)->get();
		return view('pasosVer', compact('characters', 'idActiv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasos $pasos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasos $pasos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasos  $pasos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasos $pasos)
    {
        //
    }
}
