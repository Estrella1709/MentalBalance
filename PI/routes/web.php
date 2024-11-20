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

//Route::get('/', function () {
  //  return view('home');
//});

Route::get('/', [ControladorHome::class, 'home']);
//Rutas de Inicio de sesión
Route::get('/inicioSesion', [controladorIS::class,'inicioSesion'])->name('rutaInicioSesion');
Route::post('/IS', [controladorIS::class, 'procesarIS'])->name('rutaProcesarInicioSesion');

//Rutas de Registro General
Route::get('/registroG', [controladorREG::class,'registroG'])->name('rutaRegistroGeneral');
Route::post('/registroGV', [controladorREG::class, 'procesarREG'])->name('rutaProcesarRegistroGeneral');

//Rutas de Registro Medico
Route::get('/registroM', [controladorREM::class,'registroM'])->name('rutaRegistroMedico');
Route::post('/registroMV', [controladorREM::class, 'procesarREM'])->name('rutaProcesarRegistroMedico');

//Rutas de Home
Route::get('/', [controladorHome::class,'home'])->name('rutaHome');

Route::get('/prueba', [controladorHome::class,'prueba'])->name('rutaPrueba');

//Rutas de Formulario
Route::get('/formulario', [controladorForm::class,'formulario'])->name('rutaFormulario');
Route::post('/enviarTest', [controladorForm::class, 'enviarTest'])->name('rutaEnviarTest');


//Rutas de Directorio


//Rutas de Solicitar Cita
Route::get('/SCita', [controladorSCita::class,'SCita'])->name('rutaSolicitarCita');

//Rutas Información de Enfermedades Mentales
Route::get('/depresion', [controladorInfoEM::class,'depresion'])->name('rutaInfoDepresion');
Route::get('/ansiedad', [controladorInfoEM::class,'ansiedad'])->name('rutaInfoAnsiedad');
Route::get('/bipolaridad', [controladorInfoEM::class,'bipolaridad'])->name('rutaInfoBipolaridad');
Route::get('/tdah', [controladorInfoEM::class,'tdah'])->name('rutaInfoTDAH');

//Rutas navbar
Route::get('/tratamiento', [ControladorHome::class, 'tratamiento'])->name('tratamiento');
Route::get('/directorio', [controladorDirectorio::class,'directorio'])->name('rutaDirectorio');
