<?php

namespace Database\Seeders;

use App\Models\Edad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Edad::truncate();

        Edad::create([

            "name" => "0 - 2",
            "descripcion" => "De 0 a 2 años",

        ]);

        Edad::create([

            "name" => "3 - 5",
            "descripcion" => "De 3 a 5 años",

        ]);

        Edad::create([

            "name" => "6 - 9",
            "descripcion" => "De 6 a 9 años",

        ]);

        Edad::create([

            "name" => "10 - 12",
            "descripcion" => "De 10 a 12 años",

        ]);

        Edad::create([

            "name" => "+12",
            "descripcion" => "mas de 12 años",

        ]);

        Edad::create([

            "name" => "+14",
            "descripcion" => "mas de 14 años",

        ]);

        Edad::create([

            "name" => "+16",
            "descripcion" => "mas de 16 años",

        ]);

        
    }
}
