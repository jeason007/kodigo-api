<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\kodigo;

class kodigoCrud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostrar todos los datos
        $kodigoShow = kodigo::all();
        return response()->json($kodigoShow);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //crear un nuevo dato
        $kodigo = new kodigo;
        $kodigo->NombreEstudiante = $request->NombreEstudiante;
        $kodigo->BootCamps = $request->BootCamps;
        $kodigo->Empresa = $request->Empresa;
        $kodigo->FechaInicio = $request->FechaInicio;
        $kodigo->FechaFinal = $request->FechaFinal;
        $kodigo->CobroFee = $request->CobroFee;
        $kodigo->MontoCobrar = $request->MontoCobrar;
        $kodigo->save();
        return response()->json($kodigo);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //mostrar dato por id
        $kodigo = kodigo::findOrFail($id);
        return response()->json($kodigo);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //actualizar datos...
        $kodigo = kodigo::findOrFail($id);
        $kodigo->NombreEstudiante = $request->NombreEstudiante;
        $kodigo->BootCamps = $request->BootCamps;
        $kodigo->Empresa = $request->Empresa;
        $kodigo->FechaInicio = $request->FechaInicio;
        $kodigo->FechaFinal = $request->FechaFinal;
        $kodigo->CobroFee = $request->CobroFee;
        $kodigo->MontoCobrar = $request->MontoCobrar;
        $kodigo->save();
        return response()->json($kodigo);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //eliminar datos...
        $kodigo = kodigo::findOrFail($id);
        $kodigo->delete();
        return response()->noContent();

    }
}
