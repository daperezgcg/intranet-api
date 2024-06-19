<?php

namespace App\Http\Controllers\GcRadio;

use App\Http\Controllers\Controller;
use App\Models\GcRadio\GcRadioSongs;
use App\Utilities\SharedFunctions;
use Illuminate\Http\Request;

class GcRadioSongsController extends Controller
{
    /**
     * Registra una canción.
     */
    public function registerSong(Request $request)
    {
        $validatedData = $request->validate([
            'song' => 'required|mimes:mp3',
            'title' => 'required|string',
            'artist' => 'required|string',
            'duration' => 'required|numeric',
            'id_musical_genres' => 'required|array|min:1',
            'id_musical_genres.*' => 'required|numeric',
        ]);

        $audio = $request->file('song');
        $directory = 'audio/gcradio/';
        $nameAudio =  $audio->getClientOriginalName();

        $sharedFunctions = new SharedFunctions();
        $sharedFunctions->uploadFile($directory, $audio, $nameAudio);

        $song = GcRadioSongs::create([
            'title' => $validatedData['title'],
            'artist' => $validatedData['artist'],
            'duration' => $validatedData['duration'],
            'url' => 'storage/' . $directory . $nameAudio,
        ]);

        $song->genreSongs()->sync($validatedData['id_musical_genres']);

        if ($song) {
            return response()->json($song, 200);
        }

        return response()->json('No se pudo registrar el genero musical', 400);
    }
}
