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
                                        <th>Item ID</th>
                                        <th>Item Name</th>
                                        <th>Brand</th>
                                        <th>Group Of Items</th>
                                        <th>Time Added</th>
                                        <th>Added By</th>
                                        <th>Last Modified By</th>
                                        <th>Last Modified Time</th>
                                        <th>Reason</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->item_id}}</td>
                                            <td>{{getItemName($col->item_id)}}</td>
                                            <td>{{getBrand($col->item_brand_id)}}</td>
                                            <td>{{$col->is_group_of_items}}</td>
                                            <td>{{$col->added_time}}</td>
                                            <td>{{getVendor($col->added_by)}}</td>
                                            <td>{{getVendor($col->last_modified_by)}}</td>
                                            <td>{{$col->last_modified_time}}</td>
                                            <td>{{$col->last_modification_reason}}</td>
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
