<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendorinvoices;
use App\Http\Controllers\Orderajaxdatatable as Order;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Items;
use App\Http\Controllers\Categories as cat;
use App\Http\Controllers\Inventories;
use App\Http\Controllers\Extras;
use App\Http\Controllers\Zones;

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

//AdminTable ajax routes
Route::get('loadAdmins',[Admin::class,'loadAdminUsers'])->name('loadAdmins.loadTable');
Route::post('UpdateAdmin',[Admin::class,'updateAdminTable'])->name('updateAdmin.updateAdminTable');
Route::get('users',[Admin::class,'loadRegUsers'])->name('users.loadRegUsers');
Route::post('UpdateUsers',[Admin::class,'updateUserTable'])->name('Updateusers.updateUserTable');
Route::get('cities',[Admin::class,'loadCities'])->name('cities.loadCities');
Route::post('UpdateCities',[Admin::class,'updateCityTable'])->name('UpdateCities.updateCityTable');
Route::get('pinreqs',[Admin::class,'LoadPinRequests'])->name('pinreqs.LoadPinRequests');

//Item Table ajax routes
Route::get('loadItems',[Items::class,'loadItems'])->name('loadItems.loadItems');
Route::post('UpdateItems',[Items::class,'UpdateItems'])->name('UpdateItems.UpdateItems');
Route::get('loadBrands',[Items::class,'loadBrands'])->name('loadBrands.loadBrands');
Route::post('updateBrands',[Items::class,'updateBrands'])->name('updateBrands.updateBrands');
Route::get('loadImages',[Items::class,'loadImages'])->name('loadImages.loadImages');
Route::post('updateImages',[Items::class,'updateImages'])->name('updateImages.updateImages');
Route::get('loadInfo',[Items::class,'loadInfo'])->name('loadInfo.loadInfo');
Route::post('updateInfo',[Items::class,'updateInfo'])->name('updateInfo.updateInfo');
Route::get('loadLikes',[Items::class,'loadLikes'])->name('loadLikes.loadLikes');

//Categories Table ajax routes
Route::get('loadCategories',[cat::class,'loadCategories'])->name('loadCategories.loadCategories');
Route::post('updateCategories',[cat::class,'updateCategories'])->name('updateCategories.updateCategories');
Route::get('loadSubCategories',[cat::class,'loadSubCategories'])->name('loadSubCategories.loadSubCategories');
Route::post('updateSubCategories',[cat::class,'updateSubCategories'])->name('updateSubCategories.updateSubCategories');

//Order table ajax route
Route::get('loadOrders',[Order::class,'index'])->name('loadOrders.index');
Route::post('getUpdate',[Order::class,'action'])->name('getUpdate.action');
Route::get('loadOrderStatus',[Order::class,'loadOrderStatus'])->name('loadOrderStatus.loadOrderStatus');
Route::post('updateOrderStatus',[Order::class,'updateOrderStatus'])->name('updateOrderStatus.updateOrderStatus');
Route::get('loadItemInvoices',[Order::class,'loadItemInvoices'])->name('loadItemInvoices.loadItemInvoices');
Route::post('updateItemInvoices',[Order::class,'updateItemInvoices'])->name('updateItemInvoices.updateItemInvoices');

//Inventory ajax routes
Route::get('loadStocks',[Inventories::class,'loadStocks'])->name('loadStocks.loadStocks');
Route::post('updateStocks',[Inventories::class,'updateStocks'])->name('updateStocks.updateStocks');
Route::get('loadSuppliers',[Inventories::class,'loadSuppliers'])->name('loadSuppliers.loadSuppliers');
Route::post('updateSuppliers',[Inventories::class,'updateSuppliers'])->name('updateSuppliers.updateSuppliers');
Route::get('loadReturnItems',[Inventories::class,'loadReturnItems'])->name('loadReturnItems.loadReturnItems');
Route::post('updateReturnItems',[Inventories::class,'updateReturnItems'])->name('updateReturnItems.updateReturnItems');
Route::get('loadReturnInvoices',[Inventories::class,'loadReturnInvoices'])->name('loadReturnInvoices.loadReturnInvoices');
Route::post('updateReturnInvoices',[Inventories::class,'updateReturnInvoices'])->name('updateReturnInvoices.updateReturnInvoices');
Route::get('loadPurchinvoices',[Inventories::class,'loadPurchinvoices'])->name('loadPurchinvoices.loadPurchinvoices');
Route::post('updatePurchinvoices',[Inventories::class,'updatePurchinvoices'])->name('updatePurchinvoices.updatePurchinvoices');
Route::get('loadPurchinvoicesItm',[Inventories::class,'loadPurchinvoicesItm'])->name('loadPurchinvoicesItm.loadPurchinvoicesItm');
Route::post('updatePurchinvoicesItm',[Inventories::class,'updatePurchinvoicesItm'])->name('updatePurchinvoicesItm.updatePurchinvoicesItm');

//Extradata ajax routes
Route::get('loadAdIamges',[Extras::class,'loadAdIamges'])->name('loadAdIamges.loadAdImages');
Route::post('updateAdIamges',[Extras::class,'updateAdIamges'])->name('updateAdIamges.updateAdIamges');
Route::get('loadUsrSrchs',[Extras::class,'loadUsrSrchs'])->name('loadUsrSrchs.loadUsrSrchs');

//Zone ajax routes
Route::get('loadZones',[Zones::class,'loadZones'])->name('loadZones.loadZones');
Route::post('updateZones',[Zones::class,'updateZones'])->name('updateZones.updateZones');
Route::get('loadZonearea',[Zones::class,'loadZonearea'])->name('loadZonearea.loadZonearea');
Route::post('updateZonearea',[Zones::class,'updateZonearea'])->name('updateZonearea.updateZonearea');
Route::get('loadZoneInvoices',[Zones::class,'loadZoneInvoices'])->name('loadZoneInvoices.loadZoneInvoices');
Route::post('updateZoneInvoices',[Zones::class,'updateZoneInvoices'])->name('updateZoneInvoices.updateZoneInvoices');
Route::get('loadZoneVendor',[Zones::class,'loadZoneVendor'])->name('loadZoneVendor.loadZoneVendor');
Route::post('updateZoneVendor',[Zones::class,'updateZoneVendor'])->name('updateZoneVendor.updateZoneVendor');
