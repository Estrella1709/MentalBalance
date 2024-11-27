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
        Schema::create('pre_diagnosticos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_enfermedades')->constrained('enfermedades');
            $table->foreignId('id_paciente')->constrained('pacientes');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_diagnosticos');
    }
};
