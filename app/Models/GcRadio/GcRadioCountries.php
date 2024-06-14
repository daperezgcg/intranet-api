<?php

namespace App\Models\GcRadio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GcRadioCountries extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = true;
    protected $keyType = 'int';
    protected $primaryKey = 'id';
    protected $table = 'gcradio_countries';
    protected $fillable = [
        'name',
    ];
}
