<?php

namespace App\Http\Controllers;

use App\SubPasos;
use Illuminate\Http\Request;
use App\Pasos;

class SubPasosController extends Controller
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
		$characters = Pasos::all();
		return view('subPasosCrear')->withCharacters($characters);
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
		
		$subpasos = SubPasos::create($request->all());
		return redirect()->route('SubPasos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubPasos  $subPasos
     * @return \Illuminate\Http\Response
     */
    public function show(SubPasos $subPasos)
    {
        //
		return view('subPasos');
    }
	
	public function show2(SubPasos $subPasos, Request $request)
    {
        //
		$idPaso = $request->pasoId;
		$characters = SubPasos::where('pasos', $idPaso)->get();
		return view('subPasosVer')->withCharacters($characters);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubPasos  $subPasos
     * @return \Illuminate\Http\Response
     */
    public function edit(SubPasos $subPasos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubPasos  $subPasos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubPasos $subPasos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubPasos  $subPasos
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubPasos $subPasos)
    {
        //
    }
}
