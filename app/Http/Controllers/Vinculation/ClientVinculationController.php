<?php

namespace App\Http\Controllers\Vinculation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utilities\PDFHelpers;
use App\Http\Requests\ClientVinculationRequest;
use App\Models\FormularioVinculacionCliente;
use App\Models\RegistroArchivo;


class ClientVinculationController extends Controller
{
    public function registerVinculation(ClientVinculationRequest $request) {

        try {


            $data = $request->validated();
            \Log::info('DATA REQUEST ' . print_r($data, true));

            // Se registran los datos
            $formulario = FormularioVinculacionCliente::create([
                'nit' => $data['informacionEntidad']['nit'],
                'formulario' => $data,
            ]);

            $archivosGuardados = [];

            foreach ($request->file('vinculationFiles') as $archivo) {
                // Guardar el archivo y obtener su ruta
                $ruta = $archivo->store('private/vinculaciones'); // guarda en storage/app/vinculaciones

                $formulario->archivos()->create([
                    'nombre' => $archivo->getClientOriginalName(),
                    'tipos_archivo_id' => 1, // esto depende de tu lógica
                    'ubicacion' => $ruta,
                ]);

                // $archivosGuardados[] = [
                //     'url' => Storage::url($ruta),
                //     'nombre' => $archivoDB->nombre_original,
                // ];
            }

            return response()->json([
                'mensaje' => 'Archivos subidos correctamente',
                'archivos' => $archivosGuardados,
                'id' => $formulario->id
            ]);

            $html = view('vinculation.client-vinculation', ['data' => $data])->render();
            $options = [
                'file_config' => PDFHelpers::getLetterConfig(),
                'user_pass' => null,
                // 'owner_pass' => env(PDFHelpers::CRYP_OWNER_PASS),
                'owner_pass' => null,
                'permissions' => ['print'],
            ];
            $letterContent = PDFHelpers::makeLetterPDF($html, 'Nombre_archivo', $options, 'vinculationForms.css');
            // return $this->letterContent;

            return response($letterContent)
                ->header('Content-Type', 'application/pdf')
                ->header('Content-Disposition', 'attachment; filename="archivo.pdf"');

        } catch (\Throwable $th) {
            \Log::error('Error en el registro de vinculación: ' . $th->getMessage());
            throw $th;
        }
    }

    public function uploadFiles(Request $request)
    {
        try {
            $request->validate([
                'files' => 'required|array',
                'files.*' => 'required|file|max:2048', // Validar el archivo
                'register_id' => 'required|integer', // ID del registro
            ]);

            $formulario = FormularioVinculacionCliente::find($request->input('register_id'));

            foreach ($request->file('files') as $archivo) {
                // Guardar el archivo y obtener su ruta
                $ruta = $archivo->store('private/vinculaciones'); // guarda en storage/app/vinculaciones

                $formulario->archivos()->create([
                    'nombre' => $archivo->getClientOriginalName(),
                    'tipos_archivo_id' => 2, // esto depende de tu lógica
                    'ubicacion' => $ruta,
                ]);
            }

            return response()->json([
                'message' => 'Archivo(s) subido(s) correctamente',
            ]);
        } catch (\Throwable $th) {
            \Log::error('Error al subir el archivo: ' . $th->getMessage());
            return response()->json(['error' => 'Error al subir el archivo'], 500);
        }
    }
}
