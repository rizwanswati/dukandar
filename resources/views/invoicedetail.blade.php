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
                {{--From To Date form--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Invoice Details</h5>

                                <form class="row gy-2 gx-3 align-items-center">
                                    @csrf
                                    <input type="hidden" id="user_id" name="user_id" value="{{$user_id}}">
                                    <div class="col-sm-auto">
                                        <div class="input-group">
                                            <div class="input-group-text">From</div>
                                            <input class="form-control" type="date" value="2019-08-19"
                                                   id="example-date-input" name="fromDate">
                                        </div>

                                    </div>

                                    <div class="col-sm-auto">
                                        <div class="input-group">
                                            <div class="input-group-text">To</div>
                                            <input class="form-control" type="date" value="2019-08-19"
                                                   id="example-date-input" name="toDate">
                                        </div>
                                    </div>

                                    <div class="col-sm-auto">
                                        <label class="visually-hidden" for="autoSizingSelect">Cities</label>
                                        <select class="form-select" id="autoSizingSelect" name="cities">
                                            <option disabled selected>Cities</option>

                                                @foreach($cities as $city)
                                                    <option value={{$city->city_id}}>{{$city->city_name}}</option>
                                                @endforeach

                                        </select>
                                    </div>

                                    <div class="col-sm-auto" id="vendors" hidden>
                                        <label class="visually-hidden" for="autoSizingSelect">Vendors</label>
                                        <select class="form-select" id="autoSizingSelect" name="vendors">

                                        </select>
                                    </div>

                                    <div class="col-sm-auto" id="categories" hidden>
                                        <label class="visually-hidden" for="autoSizingSelect">Categories</label>
                                        <select class="form-select" id="autoSizingSelect" name="cats">

                                        </select>
                                    </div>

                                        <div class="col-sm-auto">
{{--                                            <button id="submit" type="submit" class="btn btn-primary w-md">Submit</button>--}}
                                            <input type="button" id="submit" class="btn btn-primary w-md" value="Submit" />
                                        </div>
                                </form>

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            {{--   Table   --}}

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Detail Table</h4>
                                <p class="card-title-desc"> You can control the table through following buttons and perfrom several task through them.
                                </p>

                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Invoice</th>
                                        <th>Item Name</th>
                                        <th>Item Rate</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Item Units</th>
                                        <th>Discount</th>

                                    </tr>
                                    </thead>
                                    <tbody>

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
<script src="{{asset('assets/js/apirequest.js')}}"></script>

</body>

</html>

