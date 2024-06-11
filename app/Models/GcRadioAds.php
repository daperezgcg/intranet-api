<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GcRadioAds extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    protected $table = 'gcradio_ads';
    protected $fillable = [
        'title',
        'text',
        'url_image',
        'cta',
        'url_cta',
        'url_audio'
    ];


    public function adsCountries(): BelongsToMany
    {
        return $this->belongsToMany(GcRadioCountries::class, 'gcradio_ads_countries', 'id_ad', 'id_country', 'id');
    }
}
