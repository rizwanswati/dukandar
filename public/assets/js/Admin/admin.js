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
            "ajax":request_url+"loadAdmins",
            "columns":[
                {"data":"user_id"},
                {"data":"user_name"},
                {"data":"username"},
                {"data":"user_title"},
                {"data":"user_type"},
                {"data":"buisness_name"},
                {"data":"admin_cnic"},
                {"data":"user_pin_code"},
                {"data":"user_mobile"},
                {"data":"user_address"},
                {"data":"city_name"},
                {"data":"user_status"}
            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'UpdateAdmin',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'user_id'],
                    editable:[
                        [1, 'user_name'],
                        [2,'username'],
                        [3, 'user_title'],
                        [4, 'user_type'],
                        [5,'buisness_name'],
                        [6,'admin_cnic'],
                        [7,'user_pin_code'],
                        [8,'user_mobile'],
                        [9,'user_address'],
                        [11, 'user_status', '{"Active":"Active","Not Active":"Not Active"}']
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
                    $('#datatable-buttons').dataTable().api().ajax.reload(null,false);
                }
            });
        });
});
