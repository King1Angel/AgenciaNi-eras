<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;

class Roles extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'roles';
    protected $primaryKey = '_id';

    protected $fillable = [
        '_id',
        'user',
        'rol'
    ];

//Asiganacion de uno a muchos, un usuario puede tener un rol pero un rol puede pertenecer a muchos usuarios. 
public function usuarios(){
    return $this->hasMany(User::class, 'user','_id');
}
}
