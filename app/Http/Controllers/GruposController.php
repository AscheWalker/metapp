<?php

namespace App\Http\Controllers;

use App\Grupos;
use Illuminate\Http\Request;

use App\Sesiones;
use App\User;

class GruposController extends Controller
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
		$idSesion = $request->sesionId;
		$users = User::all();
		return view('gruposCrear', compact('users', 'idSesion'));
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
		
		$grupos = Grupos::create($request->all());
		$idSesion = $request->{'id-sesion'};
		$characters = Grupos::where('id-sesion', $idSesion)->get();
		return view('gruposVer', compact('characters', 'idSesion'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function show(Grupos $grupos)
    {
        //
    }
	
	public function show2(Grupos $grupos, Request $request)
    {
        //
		$idSesion = $request->sesionId;
		$characters = Grupos::where('id-sesion', $idSesion)->get();
		return view('gruposVer', compact('characters', 'idSesion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupos $grupos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupos $grupos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupos  $grupos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupos $grupos)
    {
        //
    }
}
