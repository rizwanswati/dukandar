<x-datatablestylesheets />
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
                                        <th>Invoice #</th>
                                        <th>Name</th>
                                        <th>Item ID</th>
                                        <th>Rate</th>
                                        <th>Sale</th>
                                        <th>Quantity</th>
                                        <th>MRP</th>
                                        <th>Expiry</th>
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
<x-datatablejs />
<!-- Datatable Admin init js -->
<script src="{{asset('assets/js/Inventory/purchaseinvoiceitems.js')}}"></script>
</body>
</html>

