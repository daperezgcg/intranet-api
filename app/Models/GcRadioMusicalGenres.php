<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GcRadioMusicalGenres extends Model
{
    use HasFactory;


    public $incrementing = true;

    protected $primaryKey = 'id';
    protected $table = 'gcradio_musical_genres';
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $updateTimestamps = false;

    protected $fillable = [
        'name',
        'url_image',
        'url_playlist'
    ];

    public function musicalPreferences(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioUsers::class, 'gcradio_musical_preferences', 'id_musical_genre', 'uuid_user', 'id');
    }
}
