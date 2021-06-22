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
                                        <th>Sub Cat ID</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->subcategory_id}}</td>
                                            <td>{{getCategory($col->category_id)}}</td>
                                            <td>{{$col->subcategory_name}}</td>
                                            <td>{{$col->subcategory_priority}}</td>
                                            <td>{{$col->subcategory_status}}</td>
                                            <td>
                                                <img src="{{$col->subcategory_image_url}}" />
                                            </td>

                                            <td>
                                                <a class="btn btn-primary waves-effect waves-light" href="{{URL::to('/').'/edit/'.$col->subcategory_id}}" role="button"><i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                                &nbsp;
                                                <a class="btn btn-danger waves-effect waves-light" href="{{URL::to('/').'/delete/'.$col->subcategory_id}}" role="button"><i class="mdi mdi-trash-can d-block font-size-16"></i></a>
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
