<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProyectoRequest;
use App\Models\Proyecto;
use App\Models\Proyecto_Entidad;
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

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(StoreProyectoRequest $request)
    {
        //
        //dd($request);

        //$total = $request->validated();
        //$iva = .16;
        $iva = .16;
        $proyectonuevo = $request->validated();
        $proyectonuevo["iva"] = $iva;
        $total = $proyectonuevo["subtotal"]*$iva + $proyectonuevo["subtotal"];
        $proyectonuevo["total"] = $total;

        $proyectonuevo["porPagar"]=$proyectonuevo["total"];
        $proyectonuevo["porRecibir"]=$proyectonuevo["total"];
        
        
        $proyecto = Proyecto::create($proyectonuevo);
            /*
        Proyecto_Entidad::create([
            'proyecto_id' => $proyecto->id, 
            'proveedor_id' => $proyecto->proveedor_id
        ]);

        $idproyecto = $proyectonuevo["proveedor_id"];
        $idproveedor = $proyectonuevo["proveedor_id"];

        $nuevotransitiva = Proyecto_Entidad::create([
            'proyecto_id' => $idproyecto,
            'proveedor_id' => $idproveedor
        ]);*/
        
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
