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
        Schema::create('kodigos', function (Blueprint $table) {
            $table->id();
            $table->string('NombreEstudiante');
            $table->string('BootCamps');
            $table->string('Empresa');
            $table->date('FechaInicioTrainer');
            $table->integer('FechaDuracionTrainer');
            $table->date('FechaTeoricaContratacion');
            $table->date('FechaFacturacion');
            $table->integer('duracionTerminosPago');
            $table->integer('SalarioFT');
            $table->date('Fechacashin');
            $table->string('Facturado');     
            $table->string('noFacturado');
            $table->string('estado');        
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kodigos');
    }
};
