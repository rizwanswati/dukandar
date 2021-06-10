<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dukandar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- DataTables -->
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    {{--    Header Component--}}
    <x-header />
{{--Header Component End--}}

<!-- ========== Left Sidebar Start ========== -->
    <x-sidebar />
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                {{--   Table   --}}

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">{{$tableName}}</h4>
                                <p class="card-title-desc"> You can control the table through following buttons and perfrom several task through them.
                                </p>

                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Business</th>
                                        <th>CNIC</th>
                                        <th>Pin</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->user_id}}</td>
                                            <td>{{$col->user_name}}</td>
                                            <td>{{$col->user_title}}</td>
                                            <td>{{$col->user_type}}</td>
                                            <td>{{$col->buisness_name}}</td>
                                            <td>{{$col->admin_cnic}}</td>
                                            <td>{{$col->user_pin_code}}</td>
                                            <td>{{$col->user_mobile}}</td>
                                            <td>{{$col->user_address}}</td>
                                            <td>{{$col->user_city}}</td>
                                            <td>{{$col->user_status}}</td>
                                            <td>
                                                <a class="btn btn-primary waves-effect waves-light" href="{{URL::to('/').'/edit/'.$col->user_id}}" role="button"><i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                                &nbsp;
                                                <a class="btn btn-danger waves-effect waves-light" href="{{URL::to('/').'/delete/'.$col->user_id}}" role="button"><i class="mdi mdi-trash-can d-block font-size-16"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>

                <!-- end Table and class=row -->





            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        {{--        Footer--}}
        <x-footer />
        {{--        Footer--}}

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

{{-- Right Sidebar for themes--}}
<x-rightsidebar />
{{--Right side theme setting bar--}}

<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>



<!-- Required datatable js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Responsive examples -->
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>




<!-- dashboard init -->
{{--<script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>--}}

<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>


</body>

</html>

