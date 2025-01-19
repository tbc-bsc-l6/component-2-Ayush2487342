@extends('admin.template')
@section('content')

    <!--admin show and order satatus table-->
    <section>
        <div class="all-admin my-5">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="order-list">
                            <p class="order-ac-title">Order Status</p>

                            <div class="data-table-section table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011-04-25</td>
                                            <td>$320,800</td>
                                        </tr>
                                       
                                       
                                        
                                       
                                        <tr>
                                            <td>Howard Hatfield</td>
                                            <td>Office Manager</td>
                                            <td>San Francisco</td>
                                            <td>51</td>
                                            <td>2008-12-16</td>
                                            <td>$164,500</td>
                                        </tr>
                                       
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011-01-25</td>
                                            <td>$112,000</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--admin show and order satatus table end-->


@endsection