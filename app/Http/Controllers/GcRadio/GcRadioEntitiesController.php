<?php

namespace App\Http\Controllers\GcRadio;

use App\Http\Controllers\Controller;
use App\Models\GcRadio\GcRadioEntities;
use Illuminate\Http\Request;

class GcRadioEntitiesController extends Controller
{
    /**
     * Obtiene todas las entidades relacionadas al id del país.
     */
    public function getEntitiesFilter(Request $request)
    {

        $idCountry = $request->input('idCountry');
        $valueFilter = $request->input('valueFilter');

        if ($idCountry == 1 && $valueFilter) {
            $entities = GcRadioEntities::where(function ($queryBuilder) use ($valueFilter) {
                $queryBuilder->where('name', 'LIKE', '%' . $valueFilter . '%');
            })->get();
        } else {
            $entities = [];
        }

        return response()->json($entities, 200);
    }
}
