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
                                        <th>P-Invoice #</th>
                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th>Purchase Rate</th>
                                        <th>Quantity</th>
                                        <th>Sale Rate</th>
                                        <th>MRP</th>
                                        <th>Expiry</th>
                                        <th>Action</th>
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
<script src="{{asset('assets/js/Inventory/returnitems.js')}}"></script>
</body>
</html>

