<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Resources\City as CityResource;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function getCitiesWithDreams()
    {
        $citiesWithDreams = City::select('cities.*')
            ->distinct()
            ->join('dreams', 'cities.id', '=', 'dreams.city_id')
            ->get();

        return CityResource::collection($citiesWithDreams);
    }
}
