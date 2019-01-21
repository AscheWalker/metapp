<?php

namespace App\Http\Controllers;

use App\Dispositivos;
use Illuminate\Http\Request;
use Auth;

class DispositivosController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function show(Dispositivos $dispositivos)
    {
        //
    }
	
	public function show2(Dispositivos $dispositivos, Request $request)
    {
        //
		$idUser = Auth::user()->id;
		$characters = Dispositivos::where('user', $idUser)->get();
		return view('dispositivosVer', compact('characters', 'idUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispositivos $dispositivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dispositivos $dispositivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dispositivos $dispositivos)
    {
        //
    }
}
