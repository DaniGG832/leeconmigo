<?php

namespace Database\Seeders;

use App\Models\Encuadernacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EncuadernacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Encuadernacion::truncate();

        Encuadernacion::create([

            "name" => "tapa dura",
            "descripcion" => "Encuadernación de libros en tapa dura",

        ]);

        Encuadernacion::create([

            "name" => "Tapa blanda",
            "descripcion" => "Encuadernación de libros en tapa blanda cosida",

        ]);

        Encuadernacion::create([

            "name" => " Grapada",
            "descripcion" => "Encuadernación grapada",

        ]);
        
        Encuadernacion::create([

            "name" => " Espiral",
            "descripcion" => "Encuadernación en wire-o o espiral doble",

        ]);



    }
}
