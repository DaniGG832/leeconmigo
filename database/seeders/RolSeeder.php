<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::truncate();

        $rol = new Rol();

        $rol->nombre = "user";

        $rol->save();

        $rol2 = new Rol();

        $rol2->nombre = "admin";

        $rol2->save();

        Rol::create([

            "nombre" => "superadmin",

        ]);
    }
}
