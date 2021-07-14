<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdsRequest;
use App\Models\Ads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewAdsController extends Controller
{
    public function naa(AdsRequest $req) {

        $ads = new Ads();
        $ads->ads_title = $req->input('ads_title');
        $ads->ads_description = $req->input('ads_description');
        $ads->user_id = $req->input('user_id');

        $ads->save();

        return redirect()->route('all-user-ads')->with('success', 'Сообщение было добавлено');

    }

    public function allData(User $user) {
        $ads = new Ads;
        $id = Auth::user()->id;
        if(Auth::user()->role == 'admin'){
            return view('dashboard.all-user-ads', [
                'data' => $ads->all()
            ]);
        }
        return view('dashboard.all-user-ads', [
            'data' => $ads->all()->where('user_id','=', $id)
        ]);
    }
    public function showOneAds($id) {
        $ads = new Ads;
        return view('dashboard.one-ads', [
            'data' => $ads->find($id)
        ]);
    }

    public function updateAds($id) {
        $ads = new Ads;
        return view('dashboard.update-ads', [
            'data' => $ads->find($id)
        ]);
    }

    public function updateAdsSubmit($id, AdsRequest $req) {

        $ads = Ads::find($id);
        $ads->ads_title = $req->input('ads_title');
        $ads->ads_description = $req->input('ads_description');

        $ads->save();

        return redirect()->route('one-ads', $id)->with('success', 'Сообщение было обновлено');

    }

    public function deleteAds($id) {
        Ads::find($id)->delete();

        return redirect()->route('all-user-ads')->with('success', 'Сообщение было удалено');
    }
}
