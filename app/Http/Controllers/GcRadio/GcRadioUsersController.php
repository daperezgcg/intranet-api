<?php

namespace App\Http\Controllers\GcRadio;

use App\Http\Controllers\Controller;
use App\Models\GcRadio\GcRadioUsers;
use Illuminate\Http\Request;

class GcRadioUsersController extends Controller
{
    /**
     * Obtiene el usuario y sus preferencias musicales.
     */
    public function getUser($uuid, Request $request)
    {
        $user = GcRadioUsers::select('*')->where('uuid', $uuid)->first();

        if ($user) {
            $user->preferences = $user->musicalPreferences()->pluck('id');
            return response()->json($user, 200);
        }

        return response()->json('Usuario no encontrado', 400);
    }

    /**
     * Registra un nuevo usuario y le asigna los generos musicales que seleccionó.
     */
    public function registerUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'id_country' => 'required|string',
            'preferences' => 'required|array|min:1',
            'preferences.*' => 'required|numeric',
        ]);

        $user = GcRadioUsers::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'id_country' => $validatedData['id_country'],
        ]);

        $user->musicalPreferences()->sync($validatedData['preferences']);

        if ($user) {
            return response()->json($user->uuid, 200);
        }
        return response()->json('No se pudo registrar el usuario', 400);
    }

    /**
     * Actualiza la información del usuario así como sus prefencias musicales.
     */
    public function updateUser(Request $request)
    {
        $validatedData = $request->validate([
            'uuid' => 'required|string',
            'id_country' => 'required|numeric',
            'preferences' => 'required|array|min:1',
            'preferences.*' => 'required|numeric',
        ]);

        $user = GcRadioUsers::with('musicalPreferences')->where('uuid', $validatedData['uuid'])->first();

        if ($user) {
            $user->update([
                'id_country' => $validatedData['id_country'],
            ]);

            $user->musicalPreferences()->sync($validatedData['preferences']);

            return response()->json($user->uuid, 200);
        }

        return response()->json('No se pudo actualizar los datos', 400);
    }
}
