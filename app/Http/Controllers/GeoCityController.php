<?php

namespace App\Http\Controllers;

use App\Models\GeoDistrict;
use App\Models\GeoRegion;
use App\Models\GeoCity;
use Illuminate\Http\Request;

class GeoCityController extends Controller
{
    public function city() {
        $geo_city = new GeoCity();
        $geo_region = new GeoRegion();
        $geo_district = new GeoDistrict();
        return view('geo-city', [
            'data_city' => $geo_city->all(),
            'data_region' => $geo_region->all(),
            'data_district' => $geo_district->all()
        ]);
    }
}
