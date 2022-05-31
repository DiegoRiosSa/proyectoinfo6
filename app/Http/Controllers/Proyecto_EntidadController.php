<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntidadRequest;
use App\Http\Requests\StoreProyecto_EntidadRequest;
use App\Http\Requests\StoreProyectoRequest;
use App\Models\Entidad;
use App\Models\Proyecto_Entidad;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class Persona_EntidadController extends Controller
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
        //    $proyecto = Proyecto::find(1);
        //   $entidad = Entidad::find(1);
        //    return view('transitiva.create', compact('proyecto', 'entidad'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyecto_EntidadRequest $request)
    {
        //
        Proyecto_Entidad::create($request->validated());


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
