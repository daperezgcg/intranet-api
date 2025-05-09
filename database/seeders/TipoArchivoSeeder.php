<?php

namespace Database\Seeders;

use App\Models\TipoArchivo;
use Illuminate\Database\Seeder;

class TipoArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposArchivos = [
            [
                'id' => 1,
                'nombre' => 'Vinculación',
                'descripcion' => 'Archivos cargados durante el porceso de diligenciamiento del formulario de vinculación.'
            ],
            [
                'id' => 2,
                'nombre' => 'Contrato',
                'descripcion' => 'Contrato diligenciado y firmado por el cliente.'
            ],
        ];

        foreach ($tiposArchivos as $tipo) {
            TipoArchivo::updateOrCreate(
                ['nombre' => $tipo['nombre']], // Condición de búsqueda
                ['descripcion' => $tipo['descripcion']] // Datos a actualizar o insertar
            );
        }

        $this->command->info('Seeder de TipoArchivo ejecutado correctamente.');
    }
}
