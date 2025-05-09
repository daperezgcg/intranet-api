<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoArchivo extends Model
{
    use HasFactory;

    protected $table = 'tipos_archivos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    /**
     * Relación Uno a Muchos.
     * Un TipoArchivo puede tener múltiples RegistroArchivo.
     */
    public function registroArchivos()
    {
        return $this->hasMany(RegistroArchivo::class, 'tipos_archivo_id');
    }
}
