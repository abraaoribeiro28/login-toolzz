<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserAuthController;

Route::post('register',[UserAuthController::class,'register']);
Route::post('login', [UserAuthController::class, 'login']);
Route::post('logout',[UserAuthController::class, 'logout'])->middleware('auth:sanctum');
