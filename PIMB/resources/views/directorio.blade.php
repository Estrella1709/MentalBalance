@extends('layouts.plantilla2')
    @section('contenido')

<link rel="stylesheet" href="{{ asset('css/directorio.css') }}">
<br>
<div class="specialists-container">
    <h2>Nuestros especialistas</h2>
    
    <div class="specialist-category">
        <div class="category-header" onclick="toggleCategory('anxiety-specialists')">
            <span>Especialistas en Ansiedad</span>
            <span class="arrow">&#9660;</span>
        </div>
        <div class="category-content" id="anxiety-specialists">
            <x-especialista name="Dr. Juan Pérez" description="Especialista en ansiedad con 10 años de experiencia" />
            <x-especialista name="Dra. María Gómez" description="Experta en terapias cognitivas para depresión" />
        </div>
    </div>
    
    <div class="specialist-category">
        <div class="category-header" onclick="toggleCategory('depression-specialists')">
            <span>Especialistas en Depresión</span>
            <span class="arrow">&#9660;</span>
        </div>
        <div class="category-content" id="depression-specialists">
        <x-especialista name="Dr. Juan Pérez" description="Especialista en ansiedad con 10 años de experiencia" />
        <x-especialista name="Dra. María Gómez" description="Experta en terapias cognitivas para depresión" />
        </div>
    </div>
    
    <div class="specialist-category">
        <div class="category-header" onclick="toggleCategory('bipolarity-specialists')">
            <span>Especialistas en Bipolaridad</span>
            <span class="arrow">&#9660;</span>
        </div>
        <div class="category-content" id="bipolarity-specialists">
            <x-especialista name="Dr. Juan Pérez" description="Especialista en ansiedad con 10 años de experiencia" />
            <x-especialista name="Dra. María Gómez" description="Experta en terapias cognitivas para depresión" />
        </div>
    </div>

    <div class="specialist-category">
        <div class="category-header" onclick="toggleCategory('adhd-specialists')">
            <span>Especialistas en TDAH</span>
            <span class="arrow">&#9660;</span>
        </div>
        <div class="category-content" id="adhd-specialists">
            <x-especialista name="Dr. Juan Pérez" description="Especialista en ansiedad con 10 años de experiencia" />
            <x-especialista name="Dra. María Gómez" description="Experta en terapias cognitivas para depresión" />
        </div>
    </div>
</div>
<br>
<script src="{{ asset('js/directorio.js') }}"></script>

@endsection