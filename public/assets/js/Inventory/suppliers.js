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
            "ajax":request_url+"loadSuppliers",
            "columns":[
                {"data":"supplier_id"},
                {"data":"supplier_name"},
                {"data":"supplier_buisness_name"},
                {"data":"supplier_address"},
                {"data":"supplier_mobile"},
                {"data":"city_name"},
                {"data":"supplier_status"},
                {"data":"supplier_created_on"}
            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'updateSuppliers',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'supplier_id'],
                    editable:[
                            [1, 'supplier_name'],
                            [2, 'supplier_buisness_name'],
                            [3, 'supplier_address'],
                            [4, 'supplier_mobile'],
                            [6, 'supplier_status','{"Active":"Active","Not Active":"Not Active"}'],
                            [7, 'supplier_created_on']
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
