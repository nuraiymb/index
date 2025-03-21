<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user/1', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('registration', [AuthController::class, 'registration']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');
    Route::post('refresh', [AuthController::class, 'refresh'])->middleware('auth:sanctum');
    Route::post('me', [AuthController::class, 'me'])->middleware('auth:sanctum');

});

Route::get('/news', [NewsController::class, 'indexApi'])->middleware('auth:sanctum');
Route::get('/my-news', [NewsController::class, 'myNews'])->middleware('auth:sanctum');
Route::get('/my-courses', [NewsController::class, 'myCourses'])->middleware('auth:sanctum');
Route::get('/courses/{title}', [CourseController::class, 'index']);

Route::get('/news/{id}', [NewsController::class, 'detailApi'])->middleware('check-admin');

Route::post('/news', [NewsController::class, 'createApi'])->middleware('auth:sanctum');

