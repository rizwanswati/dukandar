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
            //"scrollX": true,
            "ajax":request_url+"loadOrderStatus",
            "columns":[
                {"data":"order_status_id"},
                {"data":"invoice_number"},
                {"data":"pre_status"},
                {"data":"post_status"},
                {"data":"user_name"},
                {"data":"decision_time"},
                {"data":"remarks"}
            ],
            "order": [[ 0, "desc" ]],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'updateOrderStatus',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'order_status_id'],
                    editable:[
                ]
                   },

                   buttons: {
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
