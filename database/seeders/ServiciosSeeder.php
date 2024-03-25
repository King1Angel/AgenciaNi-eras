<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servicios;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Servicios::create([
            'nombre' => 'Mantenimiento',
            'descripcion' => 'Mantenimiento del hogar'
        ]);

        Servicios::create([
            'nombre' => 'Cuidado de niños',
            'descripcion' => 'Cuidado y atención de niños en el hogar'
        ]);

        Servicios::create([
            'nombre' => 'Clases particulares',
            'descripcion' => 'Impartir clases de apoyo escolar a domicilio'
        ]);

        Servicios::create([
            'nombre' => 'Cocina',
            'descripcion' => 'Preparación de comidas y cocina casera'
        ]);

        Servicios::create([
            'nombre' => 'Acompañamiento a citas',
            'descripcion' => 'Acompañamiento a citas médicas u otros compromisos'
        ]);

        Servicios::create([
            'nombre' => 'Compras',
            'descripcion' => 'Realización de compras y diligencias'
        ]);
    }
}
