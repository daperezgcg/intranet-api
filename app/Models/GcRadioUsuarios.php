<?php

namespace App\Models;
use Ramsey\Uuid\Uuid;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GcRadioGenerosMusicales;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GcRadioUsuarios extends Model
{
    use HasFactory;


    public $incrementing = false;
    protected $keyType = 'string';

    protected $primaryKey = 'uuid';

    protected $table = 'gcradio_usuarios';
    protected $connection = 'mysql';

    public $timestamps = false;
    protected $updateTimestamps = false;

    protected $fillable = [
        'nombre',
        'correo',
        'pais'
    ];

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
            // $model->created_at = now();
            // $model->updated_at = now();
        });
    }

    public function preferenciasMusicales(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioGenerosMusicales::class, 'gcradio_preferencias_musicales', 'uuid_usuario', 'id_genero_musical', 'uuid');
    }
}
