<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/aluno', [AlunoController::class, 'index']);
Route::get('/aluno/cadastro', [AlunoController::class, 'cadastro']);


use App\Http\Controllers\MateriaController;

Route::get('/materia', [MateriaController::class, 'index']);


use App\Http\Controllers\ProfessorController;

Route::get('/professor', [ProfessorController::class, 'index']);
Route::get('/professor/cadastro', [ProfessorController::class, 'cadastro']);
Route::post('/professor', [ProfessorController::class, 'store']);


use App\Http\Controllers\FilmeController;
Route::get('/filme', [FilmeController::class, 'index']);
