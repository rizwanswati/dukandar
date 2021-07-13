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
            "ajax":request_url+"loadStocks",
            "columns":[
                {"data":"id"},
                {"data":"item_id"},
                {"data":"item_name"},
                {"data":"available_quantity"},
                {"data":"purchase_rate"},
                {"data":"sale_rate"},
                {"data":"mrp_rate"},
                {"data":"minimum_required"},
                {"data":"expiry_date"},
                {"data":"status"}
            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'updateStocks',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'id'],
                    editable:[
                            [3, 'available_quantity'],
                            [4, 'purchase_rate'],
                            [5, 'sale_rate'],
                            [6, 'mrp_rate'],
                            [7, 'minimum_required'],
                            [8, 'expiry_date'],
                            [9, 'status','{"Disable":"Disable","Active":"Active","Not Active":"Not Active"}']
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
