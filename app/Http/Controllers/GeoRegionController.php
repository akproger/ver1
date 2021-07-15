<?php

namespace App\Http\Controllers;

use App\Models\GeoRegion;
use Illuminate\Http\Request;

class GeoRegionController extends Controller
{
    public function region() {
        $geo_region = new GeoRegion();
        return view('geo-region', [
            'data' => $geo_region->all()
        ]);
    }
}
