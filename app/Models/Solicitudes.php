<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Solicitudes extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'solicitudes';
    protected $primaryKey = '_id';

    protected $fillable = [
        'solicitud',
        'solicitud_id',
        'servicio_id',
        'fecha',
        'hora',
        'usuario_id',
        'fecha_solicitud',
        'numero_niñeras',
        
    ];

    public function usuario() {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function servicio(){
        return $this->belongsTo(Servicios::class, 'servicio_id');
    }

    public function getNombreServicioAttribute() {
        return $this->servicio->nombre ?? 'No disponible';
    }
    
    public function getNumeroNinerasAttribute() {
        return $this->numero_niñeras;
    }
    
}
