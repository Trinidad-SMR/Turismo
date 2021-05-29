<?php

namespace App\Http\Controllers;

use App\Hospedaje;
use Illuminate\Http\Request;

class HospedajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospedaje = Hospedaje::paginate(2);
        return view( 'hospedaje.index' , compact('hospedaje'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospedaje.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hospedaje::create($request->all());
        return redirect()->route('hospedaje.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function show(Hospedaje $hospedaje)
    {
        return view('hospedaje.show', compact('hospedaje'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospedaje $hospedaje)
    {
        $hospedaje = Hospedaje::find($hospedaje->id);
        return view('hospedaje.edit', compact('hospedaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospedaje $hospedaje)
    {
        /*$request->validate(
            [
                'Nombre',
                'Direccion',
                'Tipo'
                'Telefono'
            ]
            );

            */
            $hospedaje->update($request->all());

    

            return redirect()->route('hospedaje.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospedaje  $hospedaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospedaje $hospedaje)
    {
        $hospedaje->delete();

        return redirect()->route('hospedaje.index');
    }
}
