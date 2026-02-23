<?php

use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user/all', [UserController::class, 'index']);
Route::get('/user/show/{id}', [UserController::class, 'show']);
Route::post('/user/delete/', [UserController::class, 'delete']);
Route::post('/user/store/', [UserController::class, 'store']);
Route::get('/user/update/', [UserController::class, 'update']);

Route::get('/course/all', [CourseController::class, 'index']);
Route::get('course/show/{course}', [CourseController::class, 'show']);
Route::post('/course/delete/', [CourseController::class, 'delete']);
Route::post('/course/store/', [CourseController::class, 'store']);
Route::get('/course/update/', [CourseController::class, 'update']);

