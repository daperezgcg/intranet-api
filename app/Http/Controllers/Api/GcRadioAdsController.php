<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GcRadioAds;
use App\Utilities\SharedFunctions;
use Illuminate\Http\Request;

class GcRadioAdsController extends Controller
{

    /**
     * Obtiene todos los anunciós relacionados al id del país.
     */
    public function getAds($idCountry, Request $request)
    {
        $ads = GcRadioAds::with('adsCountries')
            ->whereHas('adsCountries', function ($query) use ($idCountry) {
                $query->where('id_country', $idCountry);
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
        $validatedData = $request->validate([
            'id_countries' => 'required|array|min:1',
            'id_countries.*' => 'required|numeric',
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

        $ads = GcRadioAds::create([
            'title' => $validatedData['title'],
            'text' => $validatedData['text'],
            'url_image' => 'storage/' . $directory . $nameImage,
            'cta' => $validatedData['cta'],
            'url_cta' => $validatedData['url_cta'],
            'url_audio' => $validatedData['url_audio'],
        ]);

        $ads->adsCountries()->sync($validatedData['id_countries']);

        if ($ads) {
            return response()->json($ads, 200);
        }
        return response()->json('No se pudo registrar el genero musical', 400);
    }
}
