<?php

namespace App\Http\Controllers;

use App\ep_especialidad;
use Illuminate\Http\Request;

class EpEspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ep_especialidad.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ep_especialidad.create');
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
     * @param  \App\ep_especialidad  $ep_especialidad
     * @return \Illuminate\Http\Response
     */
    public function show(ep_especialidad $ep_especialidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ep_especialidad  $ep_especialidad
     * @return \Illuminate\Http\Response
     */
    public function edit(ep_especialidad $ep_especialidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ep_especialidad  $ep_especialidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ep_especialidad $ep_especialidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ep_especialidad  $ep_especialidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(ep_especialidad $ep_especialidad)
    {
        //
    }
}
