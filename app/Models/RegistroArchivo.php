<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroArchivo extends Model
{
    use HasFactory;

    protected $table = 'registro_archivos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'tipos_archivo_id',
        'ubicacion',
        'archivable_id',
        'archivable_type',
    ];

    /**
     * Relación Inversa (Uno a Muchos) con TipoArchivo.
     */
    public function tipoArchivo()
    {
        return $this->belongsTo(TipoArchivo::class, 'tipos_archivo_id');
    }

    /**
     * Relación Polimórfica.
     */
    public function archivable()
    {
        return $this->morphTo();
    }
}
