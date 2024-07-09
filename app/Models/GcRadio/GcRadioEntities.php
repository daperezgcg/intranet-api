<?php

namespace App\Models\GcRadio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GcRadioEntities extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    protected $table = 'gcradio_entities';
    protected $fillable = [
        'nit',
        'name',
        'initials',
        'type',
        'department',
        'municipality',
        'address',
        'phone',
        'mobile',
        'email',
        'supervision',
        'sector',
    ];

    // public function adsCountries(): BelongsToMany
    // {
    //     return $this->belongsToMany(GcRadioCountries::class, 'gcradio_ads_countries', 'id_ad', 'id_country', 'id');
    // }
}
