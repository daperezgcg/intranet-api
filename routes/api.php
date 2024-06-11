<?php

use App\Http\Controllers\Api\GcRadioAdsController;
use App\Http\Controllers\Api\GcRadioCountriesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\GcRadioUsuariosController;
use App\Http\Controllers\Api\GcRadioGenerosMusicalesController;
use App\Http\Controllers\Api\GcRadioMusicalGenresController;
use App\Http\Controllers\Api\GcRadioUsersController;

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
    Route::controller(GcRadioUsersController::class)->group(function () {
        Route::get('getUser/{uuid}', 'getUser');
        Route::post('registerUser', 'registerUser');
        Route::put('updateUser', 'updateUser');
    });

    Route::controller(GcRadioMusicalGenresController::class)->group(function () {
        Route::get('getMusicalGenres', 'getMusicalGenres');
        Route::post('registerMusicalGenre', 'registerMusicalGenre');
    });

    Route::controller(GcRadioCountriesController::class)->group(function () {
        Route::get('getCountries', 'getCountries');
    });

    Route::controller(GcRadioAdsController::class)->group(function () {
        Route::get('getAds/{idCountry}', 'getAds');
        Route::post('registerAd', 'registerAd');
    });
});
