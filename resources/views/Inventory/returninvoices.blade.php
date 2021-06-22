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
                                        <th>Total Items</th>
                                        <th>Total Amount</th>
                                        <th>Reason</th>
                                        <th>Supplier</th>
                                        <th>Created By</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->pur_return_invoice_id}}</td>
                                            <td>{{$col->purchase_invoice_number}}</td>
                                            <td>{{$col->total_items}}</td>
                                            <td>{{$col->total_amount}}</td>
                                            <td>{{$col->reason}}</td>
                                            <td>{{getSupplier($col->supplier_id)}}</td>
                                            <td>{{getVendor($col->created_by)}}</td>
                                            <td>{{$col->created_on}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end Table and class=row -->
<x-datatablejs />
