<?php

namespace App\Http\Controllers;

use App\Exports\KodigoExport;
use Illuminate\Http\Request;
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
        $kodigo->FechaInicioTrainer = $request->FechaInicioTrainer;
        $kodigo->FechaDuracionTrainer = $request->FechaDuracionTrainer;
        $kodigo->FechaTeoricaContratacion = $request->FechaTeoricaContratacion;
        $kodigo->FechaFacturacion = $request->FechaFacturacion;
        $kodigo->duracionTerminosPago= $request->duracionTerminosPago;
        $kodigo->SalarioFT = $request->SalarioFT;
        $kodigo->Fechacashin = $request->Fechacashin;
        $kodigo->Facturado = $request->Facturado;
        $kodigo->noFacturado = $request->noFacturado;
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
    public function update(Request $request, $id)
    {
        //actualizar datos...
        $kodigo = kodigo::findOrFail($id);

        $kodigo->NombreEstudiante = $request->NombreEstudiante;
        $kodigo->BootCamps = $request->BootCamps;
        $kodigo->Empresa = $request->Empresa;
        $kodigo->FechaInicioTrainer = $request->FechaInicioTrainer;
        $kodigo->FechaDuracionTrainer = $request->FechaDuracionTrainer;
        $kodigo->FechaTeoricaContratacion = $request->FechaTeoricaContratacion;
        $kodigo->FechaFacturacion = $request->FechaFacturacion;
        $kodigo->duracionTerminosPago= $request->duracionTerminosPago;
        $kodigo->SalarioFT = $request->SalarioFT;
        $kodigo->Fechacashin = $request->Fechacashin;
        $kodigo->Facturado = $request->Facturado;
        $kodigo->noFacturado = $request->noFacturado;
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

    public function exportExcel(){
        return \Excel::download(new KodigoExport, 'reporte.xlsx');
    }

    public function modificarFecha($data)
    {
        foreach($data as $item){
            $estudiante = kodigo::findOrFail($item->id);
            $estudiante->Fechacashin = date("Y-m-d",strtotime($item["Fechacashin"]."+ 1 month"));
            $estudiante->save();
        }
    }
}
