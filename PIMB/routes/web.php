<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorIS;
use App\Http\Controllers\controladorHome;
use App\Http\Controllers\controladorForm;
use App\Http\Controllers\controladorSCita;
use App\Http\Controllers\controladorInfoEM;

use App\Http\Controllers\registroController;
use App\Http\Controllers\consultasController;
use App\Http\Controllers\CitasController;


//Rutas de Inicio de sesión:
// Formulario de inicio de sesión
Route::get('/inicioSesion', [registroController::class, 'showLoginForm'])->name('rutaInicioSesion');
// Procesar inicio de sesión
Route::post('/inicioSesion', [registroController::class, 'login'])->name('rutaProcesarInicioSesion');
// Cerrar sesión
Route::post('/logout', [registroController::class, 'logout'])->name('rutaCerrarSesion');

//Rutas de Registro:
//Formulario de Registro General
Route::get('/usuarios/create', [registroController::class,'create'])->name('rutaRegistroGeneral');
Route::post('/usuarios', [registroController::class, 'store'])->name('rutaProcesarRegistroGeneral');
//Formulario de Registro Medico
Route::get('/registro-medico/{user_id}', [registroController::class, 'showFormMedico'])->name('registroM');
Route::post('/registro-medico', [registroController::class, 'storeMedico'])->name('rutaProcesarRegistroMedico');

//Rutas de Home
Route::get('/', [registroController::class,'index'])->name('rutaHome');



Route::middleware(['auth'])->group(function () {
    //Rutas de Formulario
    Route::get('/test-salud-mental', [controladorForm::class, 'formulario'])->name('rutaFormulario')->middleware('auth');
    Route::post('/test-salud-mental', [controladorForm::class, 'enviarTest'])->name('rutaEnviarTest');

    //Rutas de Directorio
    Route::get('/directorio', [consultasController::class,'index'])->name('rutaDirectorio');

    //Envio de cita
    Route::post('/citas', [CitasController::class, 'store'])->name('citas.store');
    Route::get('/citas', [consultasController::class,'indexCitas'])->name('rutaCitas');

});




//Rutas de Solicitar Cita
Route::get('/SCita', [controladorSCita::class,'SCita'])->name('rutaSolicitarCita');

//Rutas Información de Enfermedades Mentales
Route::get('/depresion', [controladorInfoEM::class,'depresion'])->name('rutaInfoDepresion');
Route::get('/ansiedad', [controladorInfoEM::class,'ansiedad'])->name('rutaInfoAnsiedad');
Route::get('/bipolaridad', [controladorInfoEM::class,'bipolaridad'])->name('rutaInfoBipolaridad');
Route::get('/tdah', [controladorInfoEM::class,'tdah'])->name('rutaInfoTDAH');


//Pruebas
Route::get('/prueba', [controladorHome::class,'prueba'])->name('rutaPrueba');

