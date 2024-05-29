<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\GcRadioUsuariosController;
use App\Http\Controllers\Api\GcRadioGenerosMusicalesController;

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

Route::prefix('gcradio')->group(function () {
    Route::controller(GcRadioUsuariosController::class)->group(function () {
        Route::get('obtenerUsuario/{uuid}', 'obtenerUsuario');
        // Route::get('ontenerPreferencias/{uuid}', 'ontenerPreferencias');
        Route::post('registrarUsuario', 'registrarUsuario');
    });

    Route::controller(GcRadioGenerosMusicalesController::class)->group(function () {
        Route::get('obtenerGenerosMusicales', 'obtenerGenerosMusicales');
        Route::post('registrarGeneroMusical', 'registrarGeneroMusical');
    });
});
