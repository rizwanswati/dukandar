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
            "ajax":request_url+"loadItems",
            "columns":[
                {"data":"item_id"},
                {"data":"item_name"},
                {"data":"user_name"},
                {"data":"item_rate"},
                {"data":"item_unit"},
                {"data":"item_discount_percent"},
                {"data":"item_description"},
                {"data":"category_name"},
                {"data":"subcategory_name"},
                {"data":"item_priority"},
                {"data":"item_on_offer"},
                {"data":"item_half"},
                {"data":"item_status"},
                {"data":"item_keywords"}
            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")


        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'UpdateItems',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'item_id'],
                    editable:[
                        [1,"item_name"],
                        // [2,"user_name"],
                        [3,"item_rate"],
                        [4,"item_unit"],
                        [5,"item_discount_percent"],
                        [6,"item_description"],
                        // [7,"category_name"],
                        // [8,"subcategory_name"],
                        [9, 'item_priority', '{"0":"0","1":"1"}'],
                        [10,"item_on_offer",'{"0":"0","1":"1"}'],
                        [11,"item_half",'{"Yes":"Yes","No":"No"}'],
                        [12, 'item_status', '{"Active":"Active","Not Active":"Not Active"}'],
                        [13,"item_keywords"]
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
