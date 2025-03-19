<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hospitales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especialidad');
            $table->text('atencion');
            $table->string('direccion');
            $table->string('barrio');
            $table->string('comuna');
            $table->string('telefono')->nullable();
            $table->string('fax')->nullable();
            $table->string('sitio_web')->nullable();
            $table->string('gestion');
            $table->string('geometria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
