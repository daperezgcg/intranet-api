<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GcRadio\GcRadioAdsController;
use App\Http\Controllers\GcRadio\GcRadioUsersController;
use App\Http\Controllers\GcRadio\GcRadioSongsController;
use App\Http\Controllers\GcRadio\GcRadioCountriesController;
use App\Http\Controllers\GcRadio\GcRadioMusicalGenresController;

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

    Route::controller(GcRadioSongsController::class)->group(function () {
        Route::post('registerSong', 'registerSong');
    });
});
