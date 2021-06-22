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
                                        <th>Customer</th>
                                        <th>Customer #</th>
                                        <th>Itmes</th>
                                        <th>Discount</th>
                                        <th>Price</th>
                                        <th>Paid</th>
                                        <th>D-Charges</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Date</th>
                                        <th>Note</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->orders_id}}</td>
                                            <td>{{$col->invoice_number}}</td>
                                            <td>{{getCustomerName($col->mobile_number)}}</td>
                                            <td>{{$col->mobile_number}}</td>
                                            <td>{{$col->total_items}}</td>
                                            <td>{{$col->discount}}</td>
                                            <td>{{$col->total_price}}</td>
                                            <td>{{$col->paid_amount}}</td>
                                            <td>{{$col->delivery_charges}}</td>
                                            <td>{{$col->address}}</td>
                                            <td>{{getCity($col->order_city)}}</td>
                                            <td>{{$col->date}}</td>
                                            <td>{{$col->order_note}}</td>
                                            <td>{{$col->status}}</td>
                                            <td>
                                                <a class="btn btn-primary waves-effect waves-light" href="{{URL::to('/').'/edit/'.$col->orders_id}}" role="button"><i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                                &nbsp;
                                                <a class="btn btn-danger waves-effect waves-light" href="{{URL::to('/').'/delete/'.$col->orders_id}}" role="button"><i class="mdi mdi-trash-can d-block font-size-16"></i></a>
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
