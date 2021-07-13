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
                                        <th>Customer #</th>
                                        <th>Itmes</th>
                                        <th>Discount</th>
                                        <th>Price</th>
                                        <th>Paid</th>
                                        <th>D-Charges</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Note</th>
                                        <th>Customer</th>
                                        <th>City</th>
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
<script src="{{asset('assets/js/Orders/orders.js')}}"></script>
</body>
</html>

