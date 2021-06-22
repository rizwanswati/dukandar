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
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                        <th>Rate</th>
                                        <th>Sale</th>
                                        <th>MRP Rate</th>
                                        <th>Min Required</th>
                                        <th>Expiry</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->id}}</td>
                                            <td>{{getItemName($col->item_id)}}</td>
                                            <td>{{$col->available_quantity}}</td>
                                            <td>{{$col->purchase_rate}}</td>
                                            <td>{{$col->sale_rate}}</td>
                                            <td>{{$col->mrp_rate}}</td>
                                            <td>{{$col->minimum_required}}</td>
                                            <td>{{$col->expiry_date}}</td>
                                            <td>{{$col->status}}</td>
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
