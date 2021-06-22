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
                                        <th>Invoice Number</th>
                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                        <th>Units</th>
                                        <th>Rate</th>
                                        <th>Discount</th>
                                        <th>Vendor</th>
                                        <th>Include</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->id}}</td>
                                            <td>{{$col->invoice_number}}</td>
                                            <td>{{$col->item_id}}</td>
                                            <td>{{getItemName($col->item_id)}}</td>
                                            <td>{{$col->item_qty}}</td>
                                            <td>{{$col->item_unit}}</td>
                                            <td>{{$col->item_rate}}</td>
                                            <td>{{$col->item_discount_percent}}%</td>
                                            <td>{{getVendor($col->vendor_id)}}</td>
                                            <td>{{$col->vendor_include}}</td>

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
