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
            $table->date('FechaInicioTra');
            $table->date('FechaDuracionTra');
            $table->date('FechaTeorica');
            $table->date('FechaFacturacion');
            $table->date('CobroFee');
            $table->integer('MontoCobrar');
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
