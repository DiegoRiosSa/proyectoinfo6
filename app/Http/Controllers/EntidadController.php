<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntidadRequest;
use App\Models\Entidad;
use App\Models\Persona;
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
        //$persona = Persona::pluck('persona', 'id');

        $tipopersona = Entidad::leftJoin('personas', 'entidads.persona_id', '=',  'personas.id')
            ->select('entidads.*', 'personas.persona as persona_nombre')
            ->orderBy('entidads.created_at', 'desc')
            ->get();
        ;

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
        /*$entidad = new Entidad();
        $persona = Persona::pluck('persona', 'id');
        return view('dashboard.entidad.create', compact('entidad', 'persona'));*/

        return view('dashboard.entidad.create',[
            'entidad'=> new Entidad(),
            'persona_id' => 2
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
        /*
        $iva = .16;
        $proyectonuevo = $request->validated();
        $proyectonuevo["iva"] = $iva;
        $total = $proyectonuevo["subtotal"]*$iva + $proyectonuevo["subtotal"];
        $proyectonuevo["total"] = $total;

        $proyectonuevo["porPagar"]=$proyectonuevo["total"];
        $proyectonuevo["porRecibir"]=$proyectonuevo["total"];
        

        Proyecto::create($proyectonuevo);
        
        
        $tipopersona = Entidad::leftJoin('personas', 'entidads.persona_id', = 'personas.id')
            ->select('entidads.*', 'personas.persona as persona_nombre')
            ->orderBy('entidads.created_at', 'desc')
            ->get();
        );
        */



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
