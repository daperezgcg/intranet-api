<?php

namespace App\Models\GcRadio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'tilte',
        'url',
        'duration',
        'artist'
    ];
}
