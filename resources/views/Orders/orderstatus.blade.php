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
                                        <th>Pre Status</th>
                                        <th>Post Status</th>
                                        <th>Decision By</th>
                                        <th>Decision Time</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->order_status_id}}</td>
                                            <td>{{$col->invoice_number}}</td>
                                            <td>{{$col->pre_status}}</td>
                                            <td>{{$col->post_status}}</td>
                                            <td>{{getVendor($col->decision_by)}}</td>
                                            <td>{{$col->decision_time}}</td>
                                            <td>{{$col->remarks}}</td>
                                            <td>
                                                <a class="btn btn-primary waves-effect waves-light" href="{{URL::to('/').'/edit/'.$col->order_status_id}}" role="button"><i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                                &nbsp;
                                                <a class="btn btn-danger waves-effect waves-light" href="{{URL::to('/').'/delete/'.$col->order_status_id}}" role="button"><i class="mdi mdi-trash-can d-block font-size-16"></i></a>
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
