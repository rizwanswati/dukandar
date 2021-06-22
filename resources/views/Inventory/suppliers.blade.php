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
                                        <th>Name</th>
                                        <th>Business Name</th>
                                        <th>Address</th>
                                        <th>Mobile #</th>
                                        <th>City</th>
                                        <th>Status</th>
                                        <th>Created On</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->supplier_id}}</td>
                                            <td>{{$col->supplier_name}}</td>
                                            <td>{{$col->supplier_buisness_name}}</td>
                                            <td>{{$col->supplier_address}}</td>
                                            <td>{{$col->supplier_mobile}}</td>
                                            <td>{{getCity($col->supplier_city)}}</td>
                                            <td>{{$col->supplier_status}}</td>
                                            <td>{{$col->supplier_created_on}}</td>
                                            <td>
                                                <a class="btn btn-primary waves-effect waves-light" href="{{URL::to('/').'/edit/'.$col->supplier_id}}" role="button"><i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                                &nbsp;
                                                <a class="btn btn-danger waves-effect waves-light" href="{{URL::to('/').'/delete/'.$col->supplier_id}}" role="button"><i class="mdi mdi-trash-can d-block font-size-16"></i></a>
                                            </td>
                                        </tr>
                                        <!-- end Table and class=row -->
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end Table and class=row -->
<x-datatablejs />
