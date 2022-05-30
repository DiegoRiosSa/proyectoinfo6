<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaccionRequest;
use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaccion = Transaccion::orderBy('created_at', 'desc')->paginate(2);

        return view('dashboard.transaccion.transaccion',[
            'transaccion'=>$transaccion
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
        return view('dashboard.transaccion.create',[
            'transaccion'=> new Transaccion()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransaccionRequest $request)
    {
        //

        Transaccion::create($request->validated());

        return back()->with('status', 'Transaccion created successfully');  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaccion  $transaccion
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
     * @param  \App\Models\Transaccion  $transaccion
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaccion $transaccion)
    {
        //
        return view('dashboard.transaccion.edit',[
            'transaccion' => $transaccion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaccion  $transaccion
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTransaccionRequest $request, Transaccion $transaccion)
    {
        //
        $transaccion->update($request->validated());
        return back()->with('status', 'Transaccion se ha actualizado correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaccion  $transaccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaccion $transaccion)
    {
        //
        $transaccion->delete();
        return back()->with('status', 'Transaccion deleted sucessfully');
    
    }
}