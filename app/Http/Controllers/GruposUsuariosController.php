<?php

namespace App\Http\Controllers;

use App\GruposUsuarios;
use Illuminate\Http\Request;

use App\User;

class GruposUsuariosController extends Controller
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
		
		$idGrupo = $request->grupoId;
		$characters = User::all();
		return view('miembrosCrear', compact('characters', 'idGrupo'));
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
		
		$miembros = GruposUsuarios::create($request->all());
		$idGrupo = $request->id-grupo;
		$characters = GruposUsuarios::where('id-grupo', $idGrupo)->get();
		return view('subPasosVer', compact('characters', 'idGrupo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GruposUsuarios  $gruposUsuarios
     * @return \Illuminate\Http\Response
     */
    public function show(GruposUsuarios $gruposUsuarios)
    {
        //
    }
	
	public function show2(GruposUsuarios $gruposUsuarios, Request $request)
    {
        //
		$idGrupo = $request->grupoId;
		$idSesion = $request->sesionId;
		$characters = GruposUsuarios::where('id-grupo', $idGrupo)->get();
		return view('miembrosVer', compact('characters', 'idGrupo', 'idSesion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GruposUsuarios  $gruposUsuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(GruposUsuarios $gruposUsuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GruposUsuarios  $gruposUsuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GruposUsuarios $gruposUsuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GruposUsuarios  $gruposUsuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(GruposUsuarios $gruposUsuarios)
    {
        //
    }
}
