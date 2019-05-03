<?php

namespace App\Http\Controllers;

use App\Pantalla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PantallaController extends Controller
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
     * @param  \App\Pantalla  $pantalla
     * @return \Illuminate\Http\Response
     */
    public function show(Pantalla $pantalla)
    {
        //
		return view('Pantallas');
    }
	
	
	public function show2($pantalla)
    {
        //
		
		$datos = DB::table('pantallas')
					->leftJoin('sub_pasos', 'pantallas.content', '=', 'sub_pasos.id')
					->select(
							'pantallas.id as ID',
							'pantallas.grupos as GRUPOS',
							'sub_pasos.name as NOMBRE',
							'sub_pasos.desc as DESCRIPCION'
							)
					->where('grupos', $pantalla)
					->get();
		
		$characters = Pantalla::where('grupos', $pantalla)->get();
		return view('pantallasVer', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pantalla  $pantalla
     * @return \Illuminate\Http\Response
     */
    public function edit(Pantalla $pantalla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pantalla  $pantalla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pantalla $pantalla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pantalla  $pantalla
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pantalla $pantalla)
    {
        //
    }
}
