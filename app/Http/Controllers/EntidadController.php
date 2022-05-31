<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntidadRequest;
use App\Models\Entidad;
use Illuminate\Http\Request;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $entidad = Entidad::orderBy('created_at', 'desc')->paginate(2);

        return view('dashboard.entidad.entidad',[
            'entidad'=>$entidad
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.entidad.create',[
            'entidad'=> new Entidad()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEntidadRequest $request)
    {
        //
        Entidad::create($request->validated());

        return back()->with('status', 'Entidad created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "Show: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Entidad $entidad)
    {
        //
        return view('dashboard.entidad.edit',[
            'entidad' => $entidad
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEntidadRequest $request, Entidad $entidad)
    {
        //
        $entidad->update($request->validated());
        return back()->with('status', 'Entidad se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entidad $entidad)
    {
        //
        $entidad->delete();
        return back()->with('status', 'Entidad deleted sucessfully');
    }
}
