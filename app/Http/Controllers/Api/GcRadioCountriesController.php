<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GcRadioCountries;
use Illuminate\Http\Request;

class GcRadioCountriesController extends Controller
{
    public function getCountries(Request $request)
    {
        $countries = GcRadioCountries::select('*')->get();

        return response()->json($countries, 200);
    }
}
