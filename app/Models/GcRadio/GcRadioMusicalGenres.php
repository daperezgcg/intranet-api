<?php

namespace App\Models\GcRadio;

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
        'url_image'
    ];

    public function musicalPreferences(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioUsers::class, 'gcradio_musical_preferences', 'id_musical_genre', 'uuid_user', 'id');
    }

    public function genreSongs(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioSongs::class, 'gcradio_genre_songs', 'id_musical_genre', 'id_song', 'id');
    }
}
