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
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_especialidad')->constrained('especialidades');
            $table->string('cedula');
            $table->foreignId('id_usuario')->constrained('usuarios');
            $table->foreignId('id_horario_medico')->constrained('horario_medicos');
            $table->timestamps();
        });       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
