<?php

namespace App\Http\Controllers\GcRadio;

use App\Http\Controllers\Controller;
use App\Models\GcRadio\GcRadioMusicalGenres;
use App\Utilities\SharedFunctions;
use Illuminate\Http\Request;

class GcRadioMusicalGenresController extends Controller
{
    /**
     * Obtiene todos los generos musicales junto a sus canciones.
     */
    public function getMusicalGenres(Request $request)
    {
        $musicalGenres = GcRadioMusicalGenres::select('*')
        ->with('genreSongs')
        ->get();

        if ($musicalGenres) {
            return response()->json($musicalGenres, 200);
        }

        return response()->json('generos no encontrados', 400);
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

        $genre = GcRadioMusicalGenres::create([
            'name' => $validatedData['name'],
            'url_image' => 'storage/' . $directory . $nameImage,
            'url_playlist' => $validatedData['url_playlist'],
        ]);

        if ($genre) {
            return response()->json($genre, 200);
        }
        return response()->json('No se pudo registrar el genero musical', 400);
    }
}
