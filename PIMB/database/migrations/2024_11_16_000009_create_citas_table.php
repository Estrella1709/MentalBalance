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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paciente')->constrained('pacientes');
            $table->foreignId('id_medico')->constrained('medicos');
            $table->foreignId('id_medico_horario')->constrained('horario_medicos');
            $table->foreignId('id_tipo_cita')->constrained('tipo_cita');
            $table->boolean('estado');
            $table->dateTime('fecha');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
