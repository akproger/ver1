<?php

namespace App\Http\Controllers;

use App\Models\GeoDistrict;
use Illuminate\Http\Request;

class GeoDistrictController extends Controller
{
    public function district() {
        $geo_district = new GeoDistrict();
        return view('geo-district', [
            'data' => $geo_district->all()
        ]);
    }
}
