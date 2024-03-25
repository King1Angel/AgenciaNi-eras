<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicios::all();
        return view('servicios/servicios', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios/CreateS');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        Servicios::create($request->all());

        return redirect()->route('Servicios')
            ->with('success', 'Servicio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servicios $servicio)
    {
        return view('servicios/ShowS', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servicios $servicio)
    {
        return view('servicios/EditS', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
    ]);

    $servicio = Servicios::findOrFail($id); 
    $servicio->update($request->all());

    return redirect()->route('Servicios')
        ->with('success', 'Servicio actualizado exitosamente.');
}

    /**
     * Remove the specified resource from storage.
     */
public function destroy($id)
{
    $servicio = Servicios::findOrFail($id);
    $servicio->delete();

    return redirect()->route('Servicios')
        ->with('success', 'Servicio eliminado exitosamente.');
}

}
