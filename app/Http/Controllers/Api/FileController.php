<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getFiles()
    {
        $files = DocumentsFiles::all();// Obtener los archivos filtrados por carpeta
        return response()->json($files); // Retornar en formato JSON
    }

    public function getImage()
    {
        $files = File::all(); // Obtén todos los archivos

    foreach ($files as $file) {
    $filePath = $file->path; // Ruta del archivo en la base de datos

    // Establecer visibilidad pública en el sistema de archivos
    if (Storage::exists($filePath)) {
        Storage::setVisibility($filePath, 'public');


        // Obtener la URL pública del archivo
        $publicUrl = Storage::url($filePath);
        echo "Archivo disponible públicamente en: $publicUrl\n";
    } else {
        echo "Archivo no encontrado: $filePath\n";
    }
    }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
