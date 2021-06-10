$(document).ready(function () {
    var table = $('#datatable-buttons').DataTable();
    table.clear();

    $("#submit").click(function(){
        var from = formatDate($("input[name=fromDate]").val());
        var to   = formatDate($("input[name=toDate]").val());
        var user_id   = $("select[name=vendors]").val();
        var category = $("select[name=cats]").val();
        table.clear();

        console.log(to + "|||||" + from);
        console.log("Vendor ID:= "+ user_id);


        if (category === "Categories"){
            alert("Please select a category properly");
        }else{
            //for local
            // var request_url = "http://localhost/dukandar/public/api/invoice"+"/"+from+"/"+to+"/"+category+"/"+user_id;
            //for server
            var request_url = "http://admin.ritzysmartapps.com/public/api/invoice"+"/"+from+"/"+to+"/"+category+"/"+user_id;

            $.ajax({
                type: "GET",
                url: request_url,
                success: function (data) {
                    console.log(data);
                    for (var i=0; i<data.length; i++){
                        table.row.add([
                             data[i].Date,
                             data[i].Invoice,
                             data[i].item_name,
                             data[i].item_rate,
                             data[i].Qty,
                             data[i].Total,
                             data[i].item_unit,
                             data[i].Disc
                        ]).draw();
                    }
                },
                error: function (XMLHttpRequest,textStatus,errorThrown) {
                    alert("No Record Was Found");
                }
            });
        }
    });

    $('select[name="cities"]').change(function () {
        var city_id  = $(this).val();
        var vendors = $('select[name="vendors"]');
        if (city_id==='Cities'){
            alert('select correct city');
        }else {
            vendors.empty();
            var requesurl = "http://localhost/dukandar/public/api/getVendors" + "/" + city_id;
            $.ajax({
                type: "GET",
                url: requesurl,
                success: function (data) {
                    if (data.length != 0) {
                        console.log(data);
                        $('#vendors').removeAttr('hidden');
                        for (var i = 0; i < data.length; i++) {
                            vendors.append('<option value="' + data[i].user_id + '">' + data[i].user_name + '</option>');
                        }
                    } else {
                        alert('No vendor found for this city');
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("No Record Was Found");
                }
            });
        }

    });


    $('select[name="vendors"]').change(function () {
        var vendor_id  = $(this).val();
        var categories = $('select[name="cats"]');
        categories.empty();

            var requesurl = "http://localhost/dukandar/public/api/getcategories" + "/" + vendor_id;
            $.ajax({
                type: "GET",
                url: requesurl,
                success: function (data) {
                    if (data.length != 0) {
                        console.log(data);
                        $('#categories').removeAttr('hidden');
                        for (var i = 0; i < data.length; i++) {
                            for(var j = 0; j<data[i].length; j++) {
                                categories.append('<option value="' + data[i][j].category_id + '">' + data[i][j].category_name + '</option>');
                            }
                        }
                    } else {
                        alert('No vendor found for this city');
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("No Record Was Found");
                }
            });
    });

    function formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;

        return [year, month, day].join('-');
    }


});
