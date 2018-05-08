<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Resources\CityCollection;
use App\Http\Resources\CityResource;
use Illuminate\Http\Request;

class CityController extends Controller
{
	public function __construct() 
	{
		$this->middleware('auth.basic');
	}

    public function index()
    {
        $citiesWithDreams = City::with('dreams')->has('dreams')->get();

        return new CityCollection($citiesWithDreams);
    }

    public function show(Request $request, City $city)
    {
        return $city;
    }
}
