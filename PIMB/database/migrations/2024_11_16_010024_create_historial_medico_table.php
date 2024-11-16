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
        Schema::create('historial_medico', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_citas')->constrained('citas');
            $table->foreignId('id_paciente')->constrained('pacientes');
            $table->foreignId('id_tratamientos')->constrained('tratamientos');
            $table->foreignId('id_prediagnostico')->constrained('pre_diagnosticos');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_medico');
    }
};
