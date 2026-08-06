<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\NoticiaApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('login', [AuthApiController::class, 'login']);

Route::post('logout', [AuthApiController::class, 'logout'])->middleware('auth:sanctum');

Route::apiResource('noticias', NoticiaApiController::class)->only(['index','show']);  //manter os dois metodos publicos

Route::apiResource('noticias', NoticiaApiController::class)->except(['index','show'])->middleware('auth:sanctum'); // aplicar uma trava de segurança em tudo menos os except

