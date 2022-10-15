<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;



Route::get('/', [AlunoController::class,'index']);
Route::get('/alunos/create', [AlunoController::class,'create']);
Route::get('/alunos/{id}', [AlunoController::class,'show']);
Route::post('/alunos', [AlunoController::class,'store']);


