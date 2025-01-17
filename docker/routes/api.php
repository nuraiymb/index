<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user/1', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/news',[NewsController::class,'indexApi']);

Route::get('/news/{id}',[NewsController::class,'detailApi']);

Route::post('/news',[NewsController::class,'createApi']);
