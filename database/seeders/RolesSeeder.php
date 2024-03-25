<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Roles;


class RolesSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {      
        Roles::create([
            '_id'=> 1,
            'rol'=>'Niñera',
]);

        Roles::create([
            '_id'=> 2,
            'rol'=>'Cliente',
        ]);

        Roles::create([
            '_id'=> 3,
            'rol'=>'Administrador',
        ]);

    }
}
