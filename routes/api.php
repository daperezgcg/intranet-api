<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GcRadio\GcRadioAdsController;
use App\Http\Controllers\GcRadio\GcRadioUsersController;
use App\Http\Controllers\GcRadio\GcRadioSongsController;
use App\Http\Controllers\GcRadio\GcRadioCountriesController;
use App\Http\Controllers\GcRadio\GcRadioEntitiesController;
use App\Http\Controllers\GcRadio\GcRadioMusicalGenresController;
use App\Http\Controllers\Vinculation\ClientVinculationController;
use App\Http\Controllers\LocationController;



use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\FolderController;
use App\Http\Controllers\Api\categoryController;

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


Route::prefix('documents')->group(function () {
    // Ruta para obtener todas las carpetas
    Route::get('/folders', [folderController::class, 'getFolders']);

    // Ruta para obtener los archivos de una carpeta específica
    // Route::get('/files/', [fileController::class, 'getFiles']);

    Route::get('/files', [fileController::class, 'getImage']);
    Route::get('/categories', [categoryController::class, 'getCategories']);
});

Route::prefix('gcradio')->group(function () {
    Route::controller(GcRadioUsersController::class)->group(function () {
        Route::get('getUser/{uuid}', 'getUser');
        Route::get('findByEmail', 'findByEmail');
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
        Route::get('getAds/{uuid}', 'getAds');
        Route::post('registerAd', 'registerAd');
    });

    Route::controller(GcRadioSongsController::class)->group(function () {
        Route::post('registerSong', 'registerSong');
    });

    Route::controller(GcRadioEntitiesController::class)->group(function () {
        Route::get('getEntitiesFilter', 'getEntitiesFilter');
    });
});


Route::prefix('vinculation')->group(function () {
    Route::controller(ClientVinculationController::class)->group(function () {
        Route::post('register-vinculation', 'registerVinculation');
    });
});

Route::get('/countries', [LocationController::class, 'getCountries']);
Route::get('/states/{country_id}', [LocationController::class, 'getStatesByCountry']);
Route::get('/cities/{state_id}', [LocationController::class, 'getCitiesByState']);
