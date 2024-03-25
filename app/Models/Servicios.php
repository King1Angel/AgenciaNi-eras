<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Servicios extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'servicios';
    protected $primaryKey = '_id';

    protected  $fillable = [
        'servicio',
        'nombre',
        'descripcion',
        
    ];

public  function Solicitudes(){
    return  $this->hasMany(Solicitudes::class);
}

}
