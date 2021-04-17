<?php

namespace App\Http\Controllers;

use App\ZonaTuristica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZonaTuristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonasturisticas = ZonaTuristica::paginate(2);
        return view( 'zonasturisticas.index' , compact('zonasturisticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zonasturisticas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ZonaTuristica::create($request->all());
        return redirect()->route('zonasturisticas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ZonaTuristica  $zonaTuristica
     * @return \Illuminate\Http\Response
     */
    public function show(ZonaTuristica $zonaturistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ZonaTuristica  $zonaTuristica
     * @return \Illuminate\Http\Response
     */
    public function edit(ZonaTuristica $zonaTuristica)
    {
        $zonaTuristica = ZonaTuristica::find($zonaTuristica->id);
        return view('zonasturisticas.edit', compact('zonaTuristica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ZonaTuristica  $zonaTuristica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ZonaTuristica $zonaTuristica)
    {
        /*$request->validate(
            [
                'Nombre',
                'Descripcion',
                'Direccion',
                'Horario',
                'Actividades'
            ]
            );

            */
            $zonaturistica->update($request->all());

    

            return redirect()->route('zonasturisticas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ZonaTuristica  $zonaTuristica
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZonaTuristica $zonaTuristica)
    {
        //
    }
}
