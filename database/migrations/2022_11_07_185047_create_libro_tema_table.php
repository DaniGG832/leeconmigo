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
        Schema::create('libro_tema', function (Blueprint $table) {
            $table->foreignId('libro_id')->constrained('libros');
            $table->foreignId('tema_id')->constrained('temas');
            $table->primary(['libro_id', 'tema_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libro_tema');
    }
};
