<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendorinvoices;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('test/{id?}/{pass?}',[Vendorinvoices::class,'test']);
Route::get('invoice/{from}/{to}/{cat_id}/{vendor_id}',[Vendorinvoices::class,'Invoice']);
Route::get('getVendors/{citt_id}',[Vendorinvoices::class,'getVendors']);
Route::get('getcategories/{vendor_id}',[Vendorinvoices::class,'getCategories']);
