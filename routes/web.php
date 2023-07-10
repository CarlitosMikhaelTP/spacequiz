<?php

use App\Http\Controllers\ComiteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OpcionesLandingController;
use App\Http\Controllers\RLController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Se está usando método invoke para traer la primera vista dentro de / */
Route::get('/', LandingController::class);

/* Rutas de Controladores de Opciones de Landing */
Route::get('OpcionesLanding/ComoJugar',[OpcionesLandingController::class, 'ComoJugar']);
Route::get('OpcionesLanding/Masinformacion',[OpcionesLandingController::class, 'Masinformacion']);

/* Rutas de Controladores de Docente */
Route::get('Docente/CodigoSala',[DocenteController::class, 'CodigoSala']);
Route::get('Docente/configuracionSala',[DocenteController::class, 'configuracionSala']);
Route::get('Docente/HistorialSalas',[DocenteController::class, 'HistorialSalas']);
Route::get('Docente/MenuDocente',[DocenteController::class, 'MenuDocente']);
Route::get('Docente/ResultadoSala',[DocenteController::class, 'ResultadoSala']);

/* Rutas de Controladores de Estudiante */
Route::get('Estudiante/HistorialAlumno',[EstudianteController::class, 'HistorialAlumno']);
Route::get('Estudiante/MenuEstudiante',[EstudianteController::class, 'MenuEstudiante']);
Route::get('Estudiante/PreguntasSala',[EstudianteController::class, 'PreguntasSala']);
Route::get('Estudiante/ResultadoEstudiante',[EstudianteController::class, 'ResultadoEstudiante']);

/* Rutas de Controladores de comité */
Route::get('Comite/ComiteConfiguracion',[ComiteController::class, 'ComiteConfiguracion']);
Route::get('Comite/ComiteCrear',[ComiteController::class, 'ComiteCrear']);
Route::get('Comite/ComiteListar',[ComiteController::class, 'ComiteListar']);
Route::get('Comite/ComitePanel',[ComiteController::class, 'ComitePanel']);

/* Rutas de Controladores de Registros y Login */
Route::get('RL/Login',[RLController::class, 'Login']);
Route::get('RL/Registro',[RLController::class, 'Registro']);
Route::get('RL/RegistroTipo',[RLController::class, 'RegistroTipo']);














