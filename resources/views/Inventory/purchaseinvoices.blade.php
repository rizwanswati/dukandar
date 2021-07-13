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
                                        <th>Total Item</th>
                                        <th>Amount</th>
                                        <th>Paid</th>
                                        <th>Extra Charges</th>
                                        <th>Discount</th>
                                        <th>Supplier#</th>
                                        <th>Supplier</th>
                                        <th>Payment Mode</th>
                                        <th>Date</th>
                                        <th>Created By</th>
                                        <th>Last Mod-Time</th>
                                        <th>Modified By</th>
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
<script src="{{asset('assets/js/Inventory/purchaseinvoices.js')}}"></script>
</body>
</html>
