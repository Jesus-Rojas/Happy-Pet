<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('raza',[ 'Perro', 'Gato', 'Tortuga', 'Hámster', 'Otro' ]);
            $table->dateTime('fecha_nacimiento');
            $table->text('descripcion');
            $table->string('imagen');
            $table->foreignId('personas_id')
            ->constrained('personas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
};
