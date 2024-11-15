<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorIS;
use App\Http\Controllers\controladorREG;
use App\Http\Controllers\controladorREM;
use App\Http\Controllers\controladorHome;
use App\Http\Controllers\controladorForm;
use App\Http\Controllers\controladorDirectorio;
use App\Http\Controllers\controladorSCita;
use App\Http\Controllers\controladorInfoEM;

//Rutas de Inicio de sesión
Route::get('/inicioSesion', [controladorIS::class,'inicioSesion'])->name('rutaInicioSesion');
Route::post('/IS', [controladorIS::class, 'procesarIS'])->name('rutaProcesarInicioSesion');

//Rutas de Registro General
Route::get('/registroG', [controladorREG::class,'registroG'])->name('rutaRegistroGeneral');

//Rutas de Registro Medico
Route::get('/registroM', [controladorREM::class,'registroM'])->name('rutaRegistroMedico');

//Rutas de Home
Route::get('/', [controladorHome::class,'home'])->name('rutaHome');

Route::get('/prueba', [controladorHome::class,'prueba'])->name('rutaPrueba');

//Rutas de Formulario
Route::get('/formulario', [controladorForm::class,'formulario'])->name('rutaFormulario');

//Rutas de Directorio
Route::get('/directorio', [controladorDirectorio::class,'directorio'])->name('rutaDirectorio');

//Rutas de Solicitar Cita
Route::get('/SCita', [controladorSCita::class,'SCita'])->name('rutaSolicitarCita');

//Rutas Información de Enfermedades Mentales
Route::get('/depresion', [controladorInfoEM::class,'depresion'])->name('rutaInfoDepresion');
Route::get('/ansiedad', [controladorInfoEM::class,'ansiedad'])->name('rutaInfoAnsiedad');
Route::get('/bipolaridad', [controladorInfoEM::class,'bipolaridad'])->name('rutaInfoBipolaridad');
Route::get('/tdah', [controladorInfoEM::class,'tdah'])->name('rutaInfoTDAH');

