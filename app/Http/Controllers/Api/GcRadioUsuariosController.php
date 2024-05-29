<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GcRadioUsuarios;

class GcRadioUsuariosController extends Controller
{
    public function obtenerUsuario($uuid, Request $request)
    {
        $usuario = GcRadioUsuarios::select('*')->where('uuid', $uuid)->first();

        if($usuario){
            $usuario->preferencias = $usuario->preferenciasMusicales()->pluck('id');

            return response()->json($usuario, 200);
        }

        return response()->json('Usuario no encontrado', 400);
    }

    public function registrarUsuario(Request $request)
    {
         $datosValidados = $request->validate([
            'nombre' => 'required|string',
            'correo' => 'required|string',
            'pais' => 'required|string',
            'preferencias' => 'required|array|min:1',
            'preferencias.*' => 'required|numeric',
        ]);

        $usuario = GcRadioUsuarios::create([
            'nombre' => $datosValidados['nombre'],
            'correo' => $datosValidados['correo'],
            'pais' => $datosValidados['pais'],
        ]);

        $usuario->preferenciasMusicales()->sync($datosValidados['preferencias']);

        if($usuario){
            return response()->json($usuario->uuid, 200);
        }
        return response()->json('No se pudo registrar el usuario', 400);
    }
}
