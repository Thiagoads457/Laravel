<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ListaController::class, 'mostrarExer1']);

Route::post('/respostaExer1', [ListaController::class, 'calcularExer1']);

Route::get('/exer2', [ListaController::class, 'mostrarExer2']);

Route::post('/respostaExer2', [ListaController::class, 'calcularExer2']);

Route::get('/exer3', [ListaController::class, 'mostrarExer3']);

Route:: post('/respostaExer3',[ListaController::class,'calcularExer3']);

Route::get('/exer4', [ListaController::class, 'mostrarExer4']);

Route::post('/respostaExer4', [ListaController::class, 'calcularExer4']);

Route::get('/exer5', [ListaController::class, 'mostrarExer5']);

Route::post('/respostaExer5', [ListaController::class, 'calcularExer5']);
