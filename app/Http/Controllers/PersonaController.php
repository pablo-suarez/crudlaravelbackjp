<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personas = Persona::get();
        echo json_encode($personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $persona = new Persona();
        $persona->names = $request->input('names');
        $persona->lastnames = $request->input('lastnames');
        $persona->telephone = $request->input('telephone');
        $persona->email = $request->input('email');
        $persona->address = $request->input('address');
        $persona->save();
        echo json_encode($persona);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $persona_id)
    {
        //
        $persona = Persona::find($persona_id);
        $persona->names = $request->input('names');
        $persona->lastnames = $request->input('lastnames');
        $persona->telephone = $request->input('telephone');
        $persona->email = $request->input('email');
        $persona->address = $request->input('address');
        $persona->save();
        echo json_encode($persona);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($persona_id)
    {
        //
        $persona = Persona::find($persona_id);
        $persona->delete();
    }
}
