<?php

use App\Http\Controllers\GeoCityController;
use App\Http\Controllers\GeoDistrictController;
use App\Http\Controllers\GeoRegionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\NewAdsController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/new-ads', function () {
    return view('dashboard.new-ads');
})->name('new-ads');

Route::post('/dashboard/new-ads/naa', [NewAdsController::class,'naa'])->name('naa1');

//Route::post('/dashboard/new-ads/naa', function(){
//    //dd(Request::all());
//    return 'ok';
//})->name('naa1');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/all-user-ads', [NewAdsController::class,'allData'])->name('all-user-ads');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard-admin', [\App\Http\Controllers\InnerController::class, 'inner'])->name('dashboard-admin');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/dashboard/all-user-ads/{id}',
    [NewAdsController::class,'showOneAds']
)->name('one-ads');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/dashboard/all-user-ads/{id}/update',
    [NewAdsController::class,'updateAds']
)->name('ads-update');

Route::post(
    '/dashboard/all-user-ads/{id}/update',
    [NewAdsController::class,'updateAdsSubmit']
)->name('ads-update-submit');

Route::middleware(['auth:sanctum', 'verified'])->get(
    '/dashboard/all-user-ads/{id}/delete',
    [NewAdsController::class,'deleteAds']
)->name('ads-delete');

Route::get('/geoip', function(){
    $geoipInfo = geoip()->getLocation('95.29.44.200');
    return $geoipInfo->toArray();
});

Route::get('/geo-district', [GeoDistrictController::class,'district'])->name('geo-district');
Route::get('/geo-region', [GeoRegionController::class,'region'])->name('geo-region');
Route::get('/geo-city', [GeoCityController::class,'city'])->name('geo-city');
