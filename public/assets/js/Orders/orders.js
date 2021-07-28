var table;
var request_url = "http://localhost/dukandar/public/api/";
// var request_url = "http://staging.ritzysmartapps.com/public/api/";
$(document).ready(function()
{

    $("#datatable").DataTable(),
       table =  $('#datatable-buttons').DataTable(
            {

            "lengthChange": true,
            "lengthMenu": [10, 25, 50,100,200,500],
            "dom":"Bfrtip",
            "processing":true,
            "serverSide":true,
            "scrollX": true,
            "responsive":false,
            // "autoWidth":true,
            "table-layout":"fixed",
            "ajax":request_url+"loadOrders",
            "columns":[
                {"data":"orders_id"},
                {"data":"invoice_number"},
                {"data":"mobile_number"},
                {"data":"total_items"},
                {"data":"discount"},
                {"data":"total_price"},
                {"data":"paid_amount"},
                {"data":"delivery_charges"},
                {"data":"address"},
                {"data":"date"},
                {"data":"status"},
                {"data":"order_note"},
                {"data":"full_name"},
                {"data":"city_name"},
            ],
            "order": [
                [ 0, "desc" ]
            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'getUpdate',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'orders_id'],
                    editable:[
                            [1, 'invoice_number'],
                            [2, 'mobile_number'],
                            [3, 'total_items'],
                            [4, 'discount'],
                            [5, 'total_price'],
                            [6, 'paid_amount'],
                            [7, 'delivery_charges'],
                            [8, 'address'],
                            [9, 'date'],
                            [11,'order_note']
                ]
                   },

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
