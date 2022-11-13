<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(TemaSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(EdadSeeder::class);
        $this->call(IdiomaSeeder::class);

        User::truncate(); 

        User::create([
              "name"=>"dani",
              "email"=>"dani@gmail.com",
              "password"=>"$2y$10$/JED7R3L.V1tWll2g.rK8ehTj4VmQfoEgg0cJzxhuAaCJ9C6ACK4m",
              "rol_id"=>3,
          ]);

          User::create([
            "name"=>"lucas",
            "email"=>"lucas@gmail.com",
            "password"=>"$2y$10$/JED7R3L.V1tWll2g.rK8ehTj4VmQfoEgg0cJzxhuAaCJ9C6ACK4m",
            "rol_id"=>2,
            
        ]);

        User::create([
            "name"=>"rocio",
            "email"=>"rocio@gmail.com",
            "password"=>"$2y$10$/JED7R3L.V1tWll2g.rK8ehTj4VmQfoEgg0cJzxhuAaCJ9C6ACK4m",
        ]);

        User::create([
            "name"=>"martin",
            "email"=>"martin@gmail.com",
            "password"=>"$2y$10$/JED7R3L.V1tWll2g.rK8ehTj4VmQfoEgg0cJzxhuAaCJ9C6ACK4m",
            
        ]);
    }
}
