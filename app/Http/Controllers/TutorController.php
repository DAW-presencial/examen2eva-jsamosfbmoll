<?php

namespace App\Http\Controllers;

use App\Models\TutorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tutor");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        TutorModel::create([
            "empresa" => $request->empresa,
            "tipo_doc" => $request->tipo_doc,
            "dni" => $request->dni,
            "nombre" => $request->nombre,
            "primer_apellido" => $request->primer_apellido,
            "segundo_apellido" => $request->segundo_apellido,
            "pais_dni" => $request->pais_dni,
            "provincia" => $request->provincia,
            "municipio" => $request->municipio,
            "estado" => $request->estado,
            "telefono" => $request->telefono,
            "email" => $request->email
        ]);

        #DB::table('tutores')->insert([
        #    "empresa" => $request->empresa,
        #    "tipo_doc" => $request->tipo_doc,
        #    "dni" => $request->dni,
        #    "nombre" => $request->nombre,
        #    "primer_apellido" => $request->primer_apellido,
        #    "segundo_apellido" => $request->segundo_apellido,
        #    "pais_dni" => $request->pais_dni,
        #    "provincia" => $request->provincia,
        #    "municipio" => $request->municipio,
        #    "estado" => $request->estado,
        #    "telefono" => $request->telefono,
        #    "email" => $request->email
        #]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "";
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
        return "";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "";
    }
}
