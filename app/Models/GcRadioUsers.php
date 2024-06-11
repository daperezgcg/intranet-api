<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Ramsey\Uuid\Uuid;

class GcRadioUsers extends Model
{
    use HasFactory;


    public $incrementing = false;
    protected $keyType = 'string';

    protected $primaryKey = 'uuid';

    protected $table = 'gcradio_users';
    protected $connection = 'mysql';

    public $timestamps = false;
    protected $updateTimestamps = false;

    protected $fillable = [
        'name',
        'email',
        'id_country'
    ];

    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
        });
    }

    public function musicalPreferences(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioMusicalGenres::class, 'gcradio_musical_preferences', 'uuid_user', 'id_musical_genre', 'uuid');
    }

    public function countries(): BelongsTo {
            return $this->belongsTo(GcRadioCountries::class, 'id_country', 'id');
    }
}
