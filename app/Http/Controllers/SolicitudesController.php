<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitudes;
use App\Models\Servicios;

class SolicitudesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicitudes = Solicitudes::all();
        return view('solicitudes/Solicitudes', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicios = Servicios::all();
        return view('solicitudes/CreateSo', compact('servicios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los campos del formulario
        $request->validate([
            'servicio_id' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'numero_niñeras' => 'required',
        ]);
    
        // Crear una nueva instancia de Solicitud con los datos del formulario
        $solicitud = new Solicitudes();
        $solicitud->servicio_id = $request->input('servicio_id');
        $solicitud->fecha = $request->input('fecha');
        $solicitud->hora = $request->input('hora');
        $solicitud->numero_niñeras = $request->input('numero_niñeras');
    
        // Guardar la solicitud en la base de datos
        $solicitud->save();
    
        // Redirigir a la página de solicitudes con un mensaje de éxito
        return redirect()->route('Solicitudes')->with('success', 'Solicitud creada exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Solicitudes $solicitud)
    {
        return view('solicitudes/ShowSo', compact('solicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
        $solicitud = Solicitudes::findOrFail($id);
        $servicios = Servicios::all(); // Obtén los servicios que necesites
        return view('solicitudes/EditSo', compact('solicitud', 'servicios'));
    }

public function update(Request $request, $id)
{
    $request->validate([
        'servicio_id' => 'required',
        'fecha' => 'required',
        'hora' => 'required',
        'numero_niñeras' => 'required',
    ]);

    $solicitud = Solicitudes::findOrFail($id);
    $solicitud->update($request->all());

    return redirect()->route('Solicitudes');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $solicitud = Solicitudes::findOrFail($id);
        $solicitud->delete();

        return redirect()->route('Solicitudes')
            ->with('success', 'Solicitud eliminada exitosamente.');
    }
}

?>