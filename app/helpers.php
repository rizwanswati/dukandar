<?php

function typeReturn($type){
    if ($type==1)
        return 'Admin';
    if ($type==2)
        return 'Operations Manager';
    if ($type==3)
        return 'Vendor';
}

function init_Session($data){
    session(['SessionCore' =>
        [
            'user_id' => $data->user_id,
            'username' => $data->user_name,
            'user_type'=> $data->user_type,
            'user_city'=>$data->user_city
        ]]);
    session()->start();
}

function printData($item){
    echo '<pre>';
        print_r($item);
    echo '</pre>';
    exit(1);
}

function getSessionItem($sessKey,$item){
    $sess =  session()->all();
    return $sess[$sessKey][$item];
}

function tableAdmin(){
    return 'admin_users';
}

function tableCustomer(){
    return 'user_registrations';
}

function tableCities(){
    return 'cities';
}

function tablePinRequest()
{
    return 'pin_requests';
}
function tableItems()
{
    return 'items';
}

function tableBrands()
{
    return 'items__brands';
}

function tableimages()
{
    return 'items__images';
}
function tableinfo()
{
    return 'items__info';
}
function tableliked()
{
    return 'items__liked';
}

function tableInvoiceItem()
{
    return 'invoice_items';
}
function tableCategories(){
    return 'items_categories';
}
function tableItemSubCategory()
{
    return 'items_sub_categories';
}
function tableOrders()
{
    return 'orders';
}
function tableOrderStatus()
{
    return 'orders_status';
}

function tableStocks()
{
    return 'inventory__stock';
}

function tableSuppliers()
{
    return 'inventory__suppliers';
}
function tablePurchaseInvoiceItems()
{
    return 'inventory__purchese_invoice_items';
}
function tablePurhcaseInvoice()
{
    return 'inventory__purchese_invoices';
}
function tablePurchaseReturnItems()
{
    return 'inventory__purchase_return_items';
}
function tablePurchaseReturnInvoices()
{
    return 'inventory__purchase_return_invoices';
}

function tableUserSearches()
{
    return 'extra_data__user_search';
}
function tableAdImageData()
{
    return 'advertising_images';
}

function tableZones()
{
    return 'zones';
}
function tableZonesAreas()
{
    return 'zone_areas';
}
function tableZoneInvoiceItems()
{
    return 'zzz_invoice_items';
}
function tableZoneVendorStatus()
{
    return 'zzz_vendor_include_status';
}

function getCity($id){
    $city = \App\Models\General::getCity($id);
    if (empty($city)) {
        return " ";
    }else{
        return $city[0]->city_name;
    }
}

function getVendor($id){
    if (empty($id) || $id =='') {
        return " ";
    }else{
        $vendor = \App\Models\General::getVendor($id);
        if(empty($vendor)){
            return " ";
        }else{
            return $vendor[0]->user_name;
        }
    }
}

function getCategory($id){
    if (empty($id) || $id =='') {
        return " ";
    }else{
        $category = \App\Models\General::getCategory($id);
        if(empty($category)){
            return "";
        }else{
            return $category[0]->category_name;
        }
    }
}

function getSubCategory($id){
    if(empty($id)){
        return "nill";
    }else{
        $subcategory = \App\Models\General::getSubCategory($id);
        if(empty($subcategory)){
            return 'Nill';
        }else{
            return $subcategory[0]->subcategory_name;
        }
    }
}

function getItemName($id){
    if(empty($id)){
        return "nill";
    }else{
        $item = \App\Models\General::getItem($id);
        if(empty($item)){
            return 'Nill';
        }else{
            return $item[0]->item_name;
        }
    }
}

function getBrand($id){
    if(empty($id)){
        return "nill";
    }else{
        $brand = \App\Models\General::getBrandName($id);
        if(empty($brand)){
            return 'Nill';
        }else{
            return $brand[0]->brand_name;
        }
    }
}

function getCustomerName($mobileNumber){
    if(empty($mobileNumber)){
        return "nill";
    }else{
        $name = \App\Models\General::CustomerName($mobileNumber);
        if(empty($name)){
            return 'Nill';
        }else{
            return $name[0]->full_name;
        }
    }
}

function getSupplier($id)
{
    if(empty($id)){
        return "nill";
    }else{
        $supplier = \App\Models\General::getSupplierName($id);
        if(empty($supplier)){
            return 'Nill';
        }else{
            return $supplier[0]->supplier_name;
        }
    }
}

function getZone($id)
{
    if(empty($id)){
        return "nill";
    }else{
        $zone = \App\Models\General::getZoneName($id);
        if(empty($zone)){
            return 'Nill';
        }else{
            return $zone[0]->zone_name;
        }
    }
}


