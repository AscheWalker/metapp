<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
	
	public function show2(Request $request)
    {
        //
		$datos = DB::table('logs')
					->leftJoin('users', 'logs.Id-usuario', '=', 'users.id')
					->leftJoin('sesiones', 'logs.Id-sesion', '=', 'sesiones.id')
					->leftJoin('actividades', 'logs.Id-actividad', '=', 'actividades.id')
					->leftJoin('logs__tipos', 'logs.Id-tipo', '=', 'logs__tipos.id')
					->select('logs.id as ID', 'logs.Id-usuario as Usuario', 'logs.Id-sesion as Sesion', 'logs.Id-actividad as Actividad', 'logs.Valor as Valor')
					->get();
		
		return view('reporteVer', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
