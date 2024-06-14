<?php

namespace App\Http\Controllers\GcRadio;

use App\Http\Controllers\Controller;
use App\Models\GcRadio\GcRadioCountries;
use Illuminate\Http\Request;

class GcRadioCountriesController extends Controller
{
    /**
     * Obtiene todos los paises.
     */
    public function getCountries(Request $request)
    {
        $countries = GcRadioCountries::select('*')->get();

        return response()->json($countries, 200);
    }
}
