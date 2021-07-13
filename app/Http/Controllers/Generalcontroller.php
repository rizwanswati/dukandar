<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Order;

class Generalcontroller extends Controller
{



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

    //advertisment images
    public function adimg()
    {
        $data = General::getAdminUsers(tableAdImageData());
        $tableName  = tableAdImageData();
        $colName    = 'image_url';

        foreach($data as $item){
            $updatedUrl = "assets/images/".$item->image_url;
            General::updateImageUrls($tableName,$colName,$updatedUrl,'id',$item->id);
            echo 'updated = '.$updatedUrl.'</br>';
        }

    }

    //item brands
    public function itb()
    {
        $data = General::getAdminUsers(tableBrands());
        $tableName  = tableBrands();
        $colName    = 'brand_image_url';

        foreach($data as $item){
            $updatedUrl = "assets/images/".$item->brand_image_url;
            General::updateImageUrls($tableName,$colName,$updatedUrl,'brand_id',$item->brand_id);
            echo 'updated = '.$updatedUrl.'</br>';
        }

    }

    //item Images
    public function ii()
    {
        $data = General::getAdminUsers(tableimages());
        $tableName  = tableimages();
        $colName    = 'item_image_url';

        foreach($data as $item){
            $updatedUrl = "assets/images/".$item->item_image_url;
            General::updateImageUrls($tableName,$colName,$updatedUrl,'items_images_id',$item->items_images_id);
            echo 'updated = '.$updatedUrl.'</br>';
        }

    }

    //category images
    public function cati()
    {
        $data = General::getAdminUsers(tableCategories());
        $tableName  = tableCategories();
        $colName    = 'category_image_url';

        foreach($data as $item){
            $updatedUrl = "assets/images/".$item->category_image_url;
            General::updateImageUrls($tableName,$colName,$updatedUrl,'category_id',$item->category_id);
            echo 'updated = '.$updatedUrl.'</br>';
        }

    }

    //Sub Category image url
    public function subcati()
    {
        $data = General::getAdminUsers(tableItemSubCategory());
        $tableName  = tableItemSubCategory();
        $colName    = 'subcategory_image_url';

        foreach($data as $item){
            $updatedUrl = "assets/images/".$item->subcategory_image_url;
            General::updateImageUrls($tableName,$colName,$updatedUrl,'subcategory_id',$item->subcategory_id);
            echo 'updated = '.$updatedUrl.'</br>';
        }

    }

}
