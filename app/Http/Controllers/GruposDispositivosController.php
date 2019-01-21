<?php

namespace App\Http\Controllers;

use App\GruposDispositivos;
use App\Dispositivos;
use Illuminate\Http\Request;
use Auth;
use App\User;

class GruposDispositivosController extends Controller
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
		$idUser = Auth::user()->id;
		$characters = Dispositivos::where('user', $idUser)->get();
		return view('dispositivosAsignar', compact('characters', 'idGrupo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // guardado del dispositivo
		$grupoDispositivo = new GruposDispositivos;
		$grupoDispositivo->grupo = $request->{'id-grupo'};
		$dispositivo = Dispositivos::where('id', $request->{'id-dispositivo'})->get();
		foreach ($dispositivo as $key => $value){
			$grupoDispositivo->nombre = $value->nombre;
			$grupoDispositivo->dispositivo = $value->dispositivo;
		}
		$grupoDispositivo->save();
		
		//datos para volver a la vista anterior
		$miembros = GruposUsuarios::create($request->all());
		$idGrupo = $request->{'id-grupo'};
		$characters = GruposUsuarios::where('id-grupo', $idGrupo)->get();
		$idSesion = session('idSesion');
		$usuarios = User::all();
		$dispositivoAsignado = GruposDispositivos::where('grupo', $idGrupo)->orderBy('id', 'desc')->first();
		return view('miembrosVer', compact('characters', 'idGrupo', 'idSesion', 'usuarios', 'dispositivoAsignado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GruposDispositivos  $gruposDispositivos
     * @return \Illuminate\Http\Response
     */
    public function show(GruposDispositivos $gruposDispositivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GruposDispositivos  $gruposDispositivos
     * @return \Illuminate\Http\Response
     */
    public function edit(GruposDispositivos $gruposDispositivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GruposDispositivos  $gruposDispositivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GruposDispositivos $gruposDispositivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GruposDispositivos  $gruposDispositivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(GruposDispositivos $gruposDispositivos)
    {
        //
    }
}
