var table;
var request_url = "http://localhost/dukandar/public/api/";
// var request_url = "http://staging.ritzysmartapps.com/public/api/";
$(document).ready(function()
{

    $("#datatable").DataTable(),
       table =  $('#datatable-buttons').DataTable(
            {

            "lengthChange": true,
            "lengthMenu": [10, 25, 50,100,200,500,"All"],
            "dom":"Bfrtip",
            "processing":true,
            "serverSide":true,
            // "scrollX": true,
            "ajax":request_url+"loadZoneVendor",
            "columns":[
                {"data":"id"},
                {"data":"invoice_number"},
                {"data":"item_id"},
                {"data":"item_name"},
                {"data":"vendor_status"},
                {"data":"operation_time"},
                {"data":"user_name"}
            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")
});
