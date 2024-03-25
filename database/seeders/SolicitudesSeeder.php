<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Solicitudes;

class SolicitudesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Solicitudes::create([
        'solicitud'=>'Permiso',
        'solicitud_id'=>1,
        'usuario_id'=>2,
        'fecha_solicitud'=>'04/03/2024'
      ]);
    }
}
