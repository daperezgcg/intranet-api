<?php

namespace App\Models\GcRadio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GcRadioSongs extends Model
{
    use HasFactory;


    public $incrementing = true;

    protected $primaryKey = 'id';
    protected $table = 'gcradio_songs';
    protected $connection = 'mysql';
    public $timestamps = false;
    protected $updateTimestamps = false;

    protected $fillable = [
        'title',
        'url',
        'duration',
        'artist'
    ];

    public function genreSongs(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioMusicalGenres::class, 'gcradio_genre_songs', 'id_song', 'id_musical_genre', 'id');
    }
}
