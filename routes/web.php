<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

#http://127.0.0.1:8000/cadastro/participantes/


Route::get('/cadastro/participantes', [ParticipantesController::class,'create'])->name('participante');;
Route::get('/painel/inscritos', [ParticipantesController::class, 'index'])->name("paniel");
Route::post('/cadastro/participantes', [ParticipantesController::class,'store'])->name('participante');




