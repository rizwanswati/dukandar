<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Vendorinvoices;
use App\Http\Controllers\Generalcontroller;
use App\Http\Controllers\Admin;


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
    return view('auth-login-2');
});

Route::post('adminLogin',[Login::class,'adminLogin']);
Route::get('logout',[Login::class,'logout']);
Route::get('dashboard',[Login::class,'LoadDashboard']);
Route::get('invoicedetails',[Vendorinvoices::class,'index']);

Route::get('edit/{id?}',[Admin::class,'LoadEditForm']);
Route::post('save',[Admin::class,'SaveEditData']);
Route::get('delete/{id?}',[Admin::class,'Delete']);


//Admin Table Routes
Route::get('adminuser',[Generalcontroller::class,'index']);
Route::get('users',[Generalcontroller::class,'loadRegUsers']);
Route::get('cities',[Generalcontroller::class,'LoadCities']);
Route::get('pinreqs',[Generalcontroller::class,'LoadPinRequests']);

//Items Routes
Route::get('items',[Generalcontroller::class,'loadItems']);
Route::get('brands',[Generalcontroller::class,'loadBrands']);
Route::get('images',[Generalcontroller::class,'loadImages']);
Route::get('info',[Generalcontroller::class,'LoadInfo']);
Route::get('invoiceitems',[Generalcontroller::class,'LoadInvoiceItem']);
Route::get('likes',[Generalcontroller::class,'LoadLikes']);

//Category Routes
Route::get('category',[Generalcontroller::class,'loadCategories']);
Route::get('subcategories',[Generalcontroller::class,'loadSubCategories']);

//Orders Routes
Route::get('orders',[Generalcontroller::class,'loadOrders']);
Route::get('orderstatus',[Generalcontroller::class,'loadOrderStatus']);
Route::get('invoice',[Generalcontroller::class,'loadInvoices']);

//Inventory Routes
Route::get('stock',[Generalcontroller::class,'loadStocks']);
Route::get('suppliers',[Generalcontroller::class,'loadSuppliers']);
Route::get('piinvoice',[Generalcontroller::class,'loadPurchaseItemInvoice']);
Route::get('pinvoice',[Generalcontroller::class,'LoadPurchaseInvoice']);
Route::get('rtnitem',[Generalcontroller::class,'LoadReturnItems']);
Route::get('rtninvoice',[Generalcontroller::class,'LoadReturnInvoices']);

//Extra Data Routes
Route::get('searches',[Generalcontroller::class,'loadUserSearches']);
Route::get('adimgs',[Generalcontroller::class,'loadAdImages']);

//Zones' Routes
Route::get('zones',[Generalcontroller::class,'loadZones']);
Route::get('zonearea',[Generalcontroller::class,'loadZonesAreas']);
Route::get('zoneinvoices',[Generalcontroller::class,'loadZoneInvoices']);
Route::get('vendorstatus',[Generalcontroller::class,'loadZoneVendorStatus']);


//Miscillanious Test Routs
Route::get('showsess',[Login::class,'showSess']);
Route::post('check',[Vendorinvoices::class,'check']);





