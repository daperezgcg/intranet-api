<?php

namespace App\Models\GcRadio;

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


    public function countries()
    {
        return $this->morphedByMany(GcRadioCountries::class, 'model', 'gcradio_model_has_ads', 'id_ad', 'id_model');
    }

    public function entities(): BelongsToMany
    {
        return $this->morphedByMany(GcRadioEntities::class, 'model', 'gcradio_model_has_ads', 'id_ad', 'id_model');
    }
}
