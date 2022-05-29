<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProyectoRequest;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proyecto = Proyecto::orderBy('created_at', 'desc')->paginate(2);

        return view('dashboard.proyecto.proyecto',[
            'proyecto'=>$proyecto
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
        return view('dashboard.proyecto.create',[
            'proyecto'=> new Proyecto()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyectoRequest $request)
    {
        //
        Proyecto::create($request->validated());

        return back()->with('status', 'Proyecto created successfully');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto  $proyecto
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
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        //
        return view('dashboard.proyecto.edit',[
            'proyecto' => $proyecto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProyectoRequest $request, Proyecto $proyecto)
    {
        //
        $proyecto->update($request->validated());
        return back()->with('status', 'Proyecto se ha actualizado correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        
        $proyecto->delete();
        return back()->with('status', 'Proyecto deleted sucessfully');
    }
}