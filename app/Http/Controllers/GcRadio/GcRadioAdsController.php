<?php

namespace App\Http\Controllers\GcRadio;

use App\Http\Controllers\Controller;
use App\Models\GcRadio\GcRadioAds;
use App\Models\GcRadio\GcRadioEntities;
use App\Models\GcRadio\GcRadioUsers;
use App\Utilities\SharedFunctions;
use Illuminate\Http\Request;

class GcRadioAdsController extends Controller
{
    /**
     * Obtiene todos los anunciós relacionados al id del país.
     */
    public function getAds($uuid, Request $request)
    {
        $user = GcRadioUsers::select(['id_entity', 'id_country'])->where('uuid', $uuid)->first();

        $ads = GcRadioAds::with('countries')->with('entities')
            ->whereHas('countries', function ($query) use ($user) {
                $query->where('id_model', $user->id_country);
            })->orWhereHas('entities', function ($query) use ($user) {
                $query->where('id_model', $user->id_entity);
            })->get();

        if ($ads) {
            return response()->json($ads, 200);
        }

        return response()->json('Anuncios no encontrados', 400);
    }

    /**
     * Registra un anuncio y le asigna uno o mas paises.
     */
    public function registerAd(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'id_countries' => 'array|min:1',
                'id_countries.*' => 'numeric',
                'title' => 'required|string',
                'text' => 'required|string',
                'image' => 'required|image',
                'cta' => 'required|string',
                'url_cta' => 'required|string',
                'url_audio' => 'required|string',
            ]);

            $image = $request->file('image');
            $directory = 'images/gcradio/';
            $nameImage =  $image->getClientOriginalName();

            $sharedFunctions = new SharedFunctions();
            $sharedFunctions->uploadFile($directory, $image, $nameImage);
            return 123;
        } catch (\Throwable $th) {
            return response()->json($th->getMessage(), 400);

        }



    }
}
