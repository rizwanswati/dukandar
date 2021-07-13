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
            "ajax":request_url+"loadImages",
            "columns":[
                {"data":"items_images_id"},
                {"data":"item_id"},
                {"data":"item_name"},
                {"data":"item_image_status"},
                {"data":"item_image_description"},
                {"data":"item_image_url"},
                {"data":"image"}

            ],

            buttons: [
                "copy","excel","pdf","colvis","print","pageLength"
            ]

        }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
        $(".dataTables_length select").addClass("form-select form-select-sm")

        $('#datatable-buttons').on('draw.dt',function(){
            $('#datatable-buttons').Tabledit({
                url:request_url+'updateImages',
                method:"POST",
                dataType:'json',
                columns:{
                    identifier : [0, 'items_images_id'],
                    editable:[
                        [3,'item_image_status','{"Primary":"Primary","Secondary":"Secondary"}'],
                        [4,"item_image_description"],
                        [5,"item_image_url"],
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
