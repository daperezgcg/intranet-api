<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioVinculacionCliente extends Model
{
    use HasFactory;

    protected $table = 'formularios_vinculacion_clientes'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nit',
        'formulario',
    ];

    /**
     * Indica que el atributo formulario se debe convertir automáticamente a un array.
     */
    protected $casts = [
        'formulario' => 'array',
    ];

    /**
     * Relación Polimórfica.
     */
    public function archivos()
    {
        return $this->morphMany(RegistroArchivo::class, 'archivable');
    }
}
