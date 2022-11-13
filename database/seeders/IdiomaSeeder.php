<?php

namespace Database\Seeders;

use App\Models\Idioma;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Idioma::truncate();

        Idioma::create([

            "name" => "Esp.",
            "descripcion" => "Español",

        ]);

        Idioma::create([

            "name" => "Eng.",
            "descripcion" => "Ingles",

        ]);

        Idioma::create([

            "name" => "Cat.",
            "descripcion" => "Ingles",

        ]);
    }
}
