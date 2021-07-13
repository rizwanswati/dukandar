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
            "ajax":request_url+"loadPurchinvoices",
            "columns":[
                {"data":"id"},
                {"data":"purchase_invoice_number"},
                {"data":"total_items"},
                {"data":"total_amount"},
                {"data":"paid_amount"},
                {"data":"extra_charges"},
                {"data":"discount"},
                {"data":"supplier_id"},
                {"data":"supplier_name"},
                {"data":"payment_mode"},
                {"data":"purchase_date"},
                {"data":"user_name"},
                {"data":"last_modified_time"},
                {"data":"username"},

            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'updatePurchinvoices',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'id'],
                    editable:[
                            [2, 'total_items'],
                            [3, 'total_amount'],
                            [4, 'paid_amount'],
                            [5, 'extra_charges'],
                            [6, 'discount']
                    ]},

                   buttons: {
                    edit: {
                        class: 'btn btn-sm btn-secondary',
                        html: '<span class="fas fa-pencil-alt"></span>',
                        action: 'edit'
                    },
                    delete: {
                        class: 'btn btn-sm btn-secondary',
                        html: '<span class="fas fa-trash"></span>',
                        action: 'delete'
                    }
                },

                   restoreButton : false,

                   onSuccess : function(data, textStatus, jqXHR){
                       if(data == 1){
                            alert("Operation Successful");
                       }
                    $('#datatable-buttons').dataTable().api().ajax.reload(null,false);
                },
                onFail : function(jqXHR, textStatus, errorThrown){
                    alert("Cannot Update Or Delete Row, Resolve Integrity constraints!");
                }
            });
        });
});
