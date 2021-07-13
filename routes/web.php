<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Vendorinvoices;
use App\Http\Controllers\Generalcontroller;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Orderajaxdatatable as orders;


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
Route::get('adminuser', function () {
    return view('AdminTables/dbinfo',['tableName'=>'Admins']);
});
Route::get('users', function () {
    return view('AdminTables/customer',['tableName'=>'Registered Users']);
});
Route::get('cities', function () {
    return view('AdminTables/cities',['tableName'=>'Cities']);
});

Route::get('pinreqs',function(){
    return view('AdminTables/pinreqs',['tableName'=>'Pin Requests']);
});


//Items Routes
Route::get('items', function () {
    return view('Items/items',['tableName'=>'Items']);
});
Route::get('brands',function(){
    return view('Items/brands',['tableName'=>'Brands']);
});
Route::get('images',function(){
    return view('Items/images',['tableName'=>'Images']);
});
Route::get('info',function(){
    return view('Items/info',['tableName'=>'Item Info']);
});
Route::get('likes',function(){
    return view('Items/likes',['tableName'=>'Likes']);
});

//Category Routes
Route::get('category',function(){
    return view('Categories/itemcategory',['tableName'=>'Item Categories']);
});
Route::get('subcategories',function(){
    return view('Categories/subcategory',['tableName'=>'Item Sub Categories']);
});

//Orders Routes
Route::get('orders',function(){
    return view('Orders/orders',['tableName'=>'Orders']);
});

Route::get('orderstatus',function(){
    return view('Orders.orderstatus',['tableName'=>'Orders Status']);
});

Route::get('invoice',function(){
    return view('Orders/iteminvoice',['tableName'=>'Invoice Items']);
});

//Inventory Routes
Route::get('stock',function(){
    return view('Inventory/stocks',['tableName'=>'Stocks']);
});
Route::get('suppliers',function(){
    return view('Inventory/suppliers',['tableName'=>'Suppliers']);
});
Route::get('piinvoice',function(){
    return view('Inventory/purchaseinvoiceitems',['tableName'=>'Purchase Item Invoices']);
});
Route::get('pinvoice',function(){
    return view('Inventory/purchaseinvoices',['tableName'=>'Purchase Invoices']);
});
Route::get('rtnitem',function(){
    return view('Inventory/returnitems',['tableName'=>'Return Items']);
});
Route::get('rtninvoice',function(){
    return view('Inventory/returninvoices',['tableName'=>'Return Invoices']);
});

//Extra Data Routes
Route::get('searches',function(){
    return view('Extras/usersearches',['tableName'=>'User Searches']);
});
Route::get('adimgs',function(){
    return view('Extras/adimages',['tableName'=>'Advertisment Images']);
});

//Zones' Routes
Route::get('zones',function(){
    return view('Zones/zones',['tableName'=>'Zones']);
});
Route::get('zonearea',function(){
    return view('Zones/zoneareas',['tableName'=>'Zone Areas']);
});
Route::get('zoneinvoices',function(){
   return view('Zones.zoneinvoiceitems',['tableName'=>'Zone Invoices']);
});
Route::get('vendorstatus',function(){
    return view('Zones/zonevendorstatus',['tableName'=>'Zone Vendor Status']);
});


//Miscillanious Test Routs
Route::get('showsess',[Login::class,'showSess']);
Route::post('check',[Vendorinvoices::class,'check']);

//Image Address Update
Route::get('adimg',[Generalcontroller::class,'adimg']);
Route::get('itb',[Generalcontroller::class,'itb']);
Route::get('ii',[Generalcontroller::class,'ii']);
Route::get('cati',[Generalcontroller::class,'cati']);
Route::get('subcati',[Generalcontroller::class,'subcati']);



