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
            $table->decimal('lat', 10, 8); 
            $table->decimal('lng', 11, 8);
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('img')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('codigo postal')->nullable();
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
