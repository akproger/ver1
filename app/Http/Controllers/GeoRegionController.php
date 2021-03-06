<?php

namespace App\Http\Controllers;

use App\Models\GeoDistrict;
use App\Models\GeoRegion;
use Illuminate\Http\Request;

class GeoRegionController extends Controller
{
    public function region() {
        $geo_region = new GeoRegion();
        $geo_district = new GeoDistrict();
        return view('geo-region', [
            'data' => $geo_region->all(),
            'data_district' => $geo_district->all()
        ]);
    }
}
