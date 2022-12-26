<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librerias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->decimal('latitude', 10, 8); 
            $table->decimal('longitude', 11, 8);
            $table->string('email');
            $table->string('web');
            $table->string('img');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('codigo postal');
            $table->foreignId('provincia_id')->constrained('provincias');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('librerias');
    }
};
