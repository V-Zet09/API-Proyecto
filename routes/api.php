<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Agrupación de rutas para la API versión 1
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
    // Rutas para el recurso "registrations" utilizando RegistrationController
    Route::apiResource('registrations', RegistrationController::class);
});
