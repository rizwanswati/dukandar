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


//General info Routes
Route::get('adminuser',[Generalcontroller::class,'index']);
Route::get('users',[Generalcontroller::class,'loadRegUsers']);
Route::get('cities',[Generalcontroller::class,'LoadCities']);
Route::get('pinreqs',[Generalcontroller::class,'LoadPinRequests']);


//Miscillanious Test Routs
Route::get('showsess',[Login::class,'showSess']);
Route::post('check',[Vendorinvoices::class,'check']);





