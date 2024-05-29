<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GcRadioGenerosMusicales extends Model
{
    use HasFactory;


    public $incrementing = true;

    protected $primaryKey = 'id';
    protected $table = 'gcradio_generos_musicales';
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $updateTimestamps = false;

    protected $fillable = [
        'titulo',
        'url_imagen',
        'url_playlist'
    ];

    public function preferenciasMusicales(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioUsuarios::class, 'gcradio_preferencias_musicales', 'id_genero_musical', 'uuid_usuario', 'id');
    }
}
