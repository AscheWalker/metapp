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
    public function create()
    {
        //
		$characters = Actividades::all();
		return view('pasosCrear')->withCharacters($characters);
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
		return redirect()->route('Pasos');
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
		return view('pasosVer')->withCharacters($characters, $idActiv);
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
