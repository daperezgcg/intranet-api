<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GcRadioMusicalGenres;
use App\Utilities\SharedFunctions;
use Illuminate\Http\Request;

class GcRadioMusicalGenresController extends Controller
{
    /**
     * Obtiene todos los generos musicales.
     */
    public function getMusicalGenres(Request $request)
    {
        $musicalGenre = GcRadioMusicalGenres::select('*')->get();

        return response()->json($musicalGenre, 200);
    }

    /**
     * Registra un genero musical.
     */
    public function registerMusicalGenre(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'url_playlist' => 'required|string',
        ]);

        $image = $request->file('image');
        $directory = 'images/gcradio/';
        $nameImage =  $image->getClientOriginalName();

        $sharedFunctions = new SharedFunctions();
        $sharedFunctions->uploadFile($directory, $image, $nameImage);

        $genres = GcRadioMusicalGenres::create([
            'name' => $validatedData['name'],
            'url_image' => 'storage/' . $directory . $nameImage,
            'url_playlist' => $validatedData['url_playlist'],
        ]);

        if ($genres) {
            return response()->json($genres, 200);
        }
        return response()->json('No se pudo registrar el genero musical', 400);
    }
}
