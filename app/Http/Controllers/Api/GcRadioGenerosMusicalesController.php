<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Utilities\SharedFunctions;
use App\Http\Controllers\Controller;
use App\Models\GcRadioGenerosMusicales;

class GcRadioGenerosMusicalesController extends Controller
{
    public function obtenerGenerosMusicales(Request $request)
    {
        $generosMusicales = GcRadioGenerosMusicales::select('*')->get();

        return response()->json($generosMusicales, 200);
    }

    public function registrarGeneroMusical(Request $request)
    {
        $datosValidados = $request->validate([
            'titulo' => 'required|string',
            'imagen' => 'required|image',
            'url_playlist' => 'required|string',
        ]);

        $imagen = $request->file('imagen');
        $directorio = 'imagenes/gcradio/';
        $nombreImagen =  $imagen->getClientOriginalName();

        $sharedFunctions = new SharedFunctions();
        $sharedFunctions->uploadFile($directorio, $imagen, $nombreImagen);

        $generos = GcRadioGenerosMusicales::create([
            'titulo' => $datosValidados['titulo'],
            'url_imagen' => 'storage/' . $directorio . $nombreImagen,
            'url_playlist' => $datosValidados['url_playlist'],
        ]);

        if($generos){
            return response()->json($generos, 200);
        }
        return response()->json('No se pudo registrar el genero musical', 400);
    }
}
