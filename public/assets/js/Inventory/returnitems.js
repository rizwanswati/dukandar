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
            "ajax":request_url+"loadReturnItems",
            "columns":[
                {"data":"id"},
                {"data":"pur_return_invoice_id"},
                {"data":"item_id"},
                {"data":"item_name"},
                {"data":"purchase_rate"},
                {"data":"quantity"},
                {"data":"sale_rate"},
                {"data":"mrp"},
                {"data":"expiry_date"}
            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'updateReturnItems',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'id'],
                    editable:[
                            [4, 'purchase_rate'],
                            [5, 'quantity'],
                            [6, 'sale_rate'],
                            [7, 'mrp'],
                            [8, 'expiry_date']
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
