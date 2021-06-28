<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;

class Generalcontroller extends Controller
{
    function index(){
        $data['TableData'] = General::getAdminUsers(tableAdmin());
        return view('AdminTables/dbinfo',['Table'=>$data['TableData'],'tableName'=>'Admin Users']);
    }
    function loadRegUsers(){
        $data['TableData'] = General::getAdminUsers(tableCustomer());
       // return $data;
        return view('AdminTables/customer',['Table'=>$data['TableData'],'tableName'=>'Registered Users']);
    }
    function LoadCities(){
        $data['TableData'] = General::getAdminUsers(tableCities());
        return view('AdminTables/cities',['Table'=>$data['TableData'],'tableName'=>'Cities']);
    }
    function LoadPinRequests(){
        $data['TableData'] = General::getAdminUsers(tablePinRequest());
        return view('AdminTables/pinreqs',['Table'=>$data['TableData'],'tableName'=>'Pin Requests']);
    }

    public function loadItems()
    {
        $data['TableData'] = General::getAdminUsers(tableItems());
        return view('Items/items',['Table'=>$data['TableData'],'tableName'=>'Items']);
    }

    public function loadInvoiceItem()
    {
        $data['TableData'] = General::getAdminUsers(tableInvoiceItem());
        return view('Items/invoiceitems',['Table'=>$data['TableData'],'tableName'=>'Invoice Items']);
    }
    public function loadBrands()
    {
        $data['TableData'] = General::getAdminUsers(tableBrands());
        return view('Items/brands',['Table'=>$data['TableData'],'tableName'=>'Brands']);
    }
    public function loadImages()
    {
        $data['TableData'] = General::getAdminUsers(tableimages());
        return view('Items/images',['Table'=>$data['TableData'],'tableName'=>'Images']);
    }
    public function loadInfo()
    {
        $data['TableData'] = General::getAdminUsers(tableinfo());
        return view('Items/info',['Table'=>$data['TableData'],'tableName'=>'Info']);
    }
    public function loadLikes()
    {
        $data['TableData'] = General::getAdminUsers(tableliked());
        return view('Items/likes',['Table'=>$data['TableData'],'tableName'=>'Likes']);
    }
    public function loadCategories()
    {
        $data['TableData'] = General::getAdminUsers(tableCategories());
        return view('Categories/itemcategory',['Table'=>$data['TableData'],'tableName'=>'Item Categories']);
    }
    public function loadSubCategories()
    {
        $data['TableData'] = General::getAdminUsers(tableItemSubCategory());
        return view('Categories/subcategory',['Table'=>$data['TableData'],'tableName'=>'Item Subcategories']);
    }

    public function loadOrders()
    {
        $data['TableData'] = General::getAdminUsers(tableOrders());
        return view('Orders/orders',['Table'=>$data['TableData'],'tableName'=>'Orders']);
    }

    public function loadOrderStatus()
    {
        $data['TableData'] = General::getAdminUsers(tableOrderStatus());
        return view('Orders/orderstatus',['Table'=>$data['TableData'],'tableName'=>'Order Status']);
    }

    public function loadInvoices(){
        $data['TableData'] = General::getAdminUsers(tableInvoiceItem());
        return view('Orders/iteminvoice',['Table'=>$data['TableData'],'tableName'=>'Item Invoices']);
    }


    public function loadStocks()
    {
        $data['TableData'] = General::getAdminUsers(tableStocks());
        return view('Inventory/stocks',['Table'=>$data['TableData'],'tableName'=>'Stocks']);
    }
    public function loadSuppliers()
    {
        $data['TableData'] = General::getAdminUsers(tableSuppliers());
        return view('Inventory/suppliers',['Table'=>$data['TableData'],'tableName'=>'Suppliers']);
    }

    public function loadPurchaseItemInvoice()
    {
        $data['TableData'] = General::getAdminUsers(tablePurchaseInvoiceItems());
        return view('Inventory/purchaseinvoiceitems',['Table'=>$data['TableData'],'tableName'=>'Purchase Item Invoices']);
    }

    public function LoadPurchaseInvoice()
    {
        $data['TableData'] = General::getAdminUsers(tablePurhcaseInvoice());
        return view('Inventory/purchaseinvoices',['Table'=>$data['TableData'],'tableName'=>'Purchase Invoices']);
    }

    public function LoadReturnItems(){
        $data['TableData'] = General::getAdminUsers(tablePurchaseReturnItems());
        return view('Inventory/returnitems',['Table'=>$data['TableData'],'tableName'=>'Return Item']);
    }

    public function LoadReturnInvoices(){
        $data['TableData'] = General::getAdminUsers(tablePurchaseReturnInvoices());
        return view('Inventory/returninvoices',['Table'=>$data['TableData'],'tableName'=>'Retun Invoices']);
    }

    public function loadUserSearches(){
        $data['TableData'] = General::getAdminUsers(tableUserSearches());
        return view('Extras/usersearches',['Table'=>$data['TableData'],'tableName'=>'User Searches']);
    }

    public function loadAdImages(){
        $data['TableData'] = General::getAdminUsers(tableAdImageData());
        return view('Extras/adimages',['Table'=>$data['TableData'],'tableName'=>'Advertisment Images']);
    }

    public function loadZones(){
        $data['TableData'] = General::getAdminUsers(tableZones());
        return view('Zones/zones',['Table'=>$data['TableData'],'tableName'=>'Zones']);
    }

    public function loadZonesAreas(){
        $data['TableData'] = General::getAdminUsers(tableZonesAreas());
        return view('Zones/zoneareas',['Table'=>$data['TableData'],'tableName'=>'Zone Areas']);
    }

    public function loadZoneInvoices(){
        $data['TableData'] = General::getAdminUsers(tableZoneInvoiceItems());
        return view('Zones/zoneinvoiceitems',['Table'=>$data['TableData'],'tableName'=>'Zone Invoice Items']);
    }

    public function loadZoneVendorStatus(){
        $data['TableData'] = General::getAdminUsers(tableZoneVendorStatus());
        return view('Zones/zonevendorstatus',['Table'=>$data['TableData'],'tableName'=>'Zone Vendor Status']);
    }

}
