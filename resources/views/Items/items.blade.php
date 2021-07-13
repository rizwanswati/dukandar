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
                                        <th>vendor</th>
                                        <th>Rate</th>
                                        <th>Unit</th>
                                        <th>Dicount</th>
                                        <th>Desc</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Priority</th>
                                        <th>Offer</th>
                                        <th>Half</th>
                                        <th>Status</th>
                                        <th>Keyword</th>
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
<script src="{{asset('assets/js/Items/items.js')}}"></script>
</body>

</html>
