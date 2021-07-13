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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end Table and class=row -->
<x-datatablejs />

<script src="{{asset('assets/js/Items/info.js')}}"></script>
</body>

</html>
