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
                                        <th>Purchase Invoice #</th>
                                        <th>Item Name</th>
                                        <th>Item ID</th>
                                        <th>Rate</th>
                                        <th>Sale</th>
                                        <th>Quantity</th>
                                        <th>MRP</th>
                                        <th>Expiry</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($Table as $col)
                                        <tr>
                                            <td>{{$col->purchase_invoice_number}}</td>
                                            <td>{{getItemName($col->item_id)}}</td>
                                            <td>{{$col->item_id}}</td>
                                            <td>{{$col->purchase_rate}}</td>
                                            <td>{{$col->sale_rate}}</td>
                                            <td>{{$col->quantity}}</td>
                                            <td>{{$col->mrp}}</td>
                                            <td>{{$col->expiry_date}}</td>
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
