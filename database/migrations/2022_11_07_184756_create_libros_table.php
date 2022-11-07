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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('titulo_original');
            $table->string('ISBN')->unique();
            $table->string('year');
            $table->string('n_pag');
            $table->string('img')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('signosis');
            $table->string('encuadernacion')->nullable();
            //$table->string('idioma')->nullable();
            $table->foreignId('editorial_id')->constrained('editoriales');
            $table->foreignId('ilustrador_id')->constrained('ilustradores');
            $table->foreignId('edad_id')->constrained('edades');
            $table->foreignId('idioma_id')->constrained('idiomas');
            $table->foreignId('autor_id')->constrained('autores');
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
        Schema::dropIfExists('libros');
    }
};
