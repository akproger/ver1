<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InnerController extends Controller
{
    public function inner(){

        //$geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        $geoipInfo = geoip()->getLocation('95.29.44.200');

        if(\Gate::check('view-admin-part')){
            return view('dashboard-admin',['geoipInfo' => $geoipInfo]);
        }
        return view('dashboard-admin-error',['geoipInfo' => $geoipInfo]);
    }
}
