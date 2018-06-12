<?php

namespace App\Http\Controllers;

use App\Sesiones;
use Illuminate\Http\Request;

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
		return view('sesionesVer')->withCharacters($characters);
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
