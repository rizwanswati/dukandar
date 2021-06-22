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

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->id}}</td>
                                            <td>{{$col->purchase_invoice_number}}</td>
                                            <td>{{$col->total_items}}</td>
                                            <td>{{$col->total_amount}}</td>
                                            <td>{{$col->paid_amount}}</td>
                                            <td>{{$col->extra_charges}}</td>
                                            <td>{{$col->discount}}</td>
                                            <td>{{getSupplier($col->supplier_id)}}</td>
                                            <td>{{$col->payment_mode}}</td>
                                            <td>{{$col->purchase_date}}</td>
                                            <td>{{getVendor($col->created_by)}}</td>
                                            <td>{{$col->last_modified_time}}</td>
                                            <td>{{getVendor($col->last_modified_by)}}</td>
                                            <td>
                                                <a class="btn btn-primary waves-effect waves-light" href="{{URL::to('/').'/edit/'.$col->id}}" role="button"><i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                                &nbsp;
                                                <a class="btn btn-danger waves-effect waves-light" href="{{URL::to('/').'/delete/'.$col->id}}" role="button"><i class="mdi mdi-trash-can d-block font-size-16"></i></a>
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
<x-datatablejs />
