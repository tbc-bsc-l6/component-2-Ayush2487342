@extends('admin.template')
@section('content')

    <section class="dashboard-top-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                      
                        <!-- important -->
                        <div class="wre-sec">
                            <div class="row">
                                <div class="col-lg-3 col-md- col-sm-3 col-6 my-1 bdr-cls">
                                    <div class="earn-view">
                                        <span class="fas fa-crown earn-icon wallet"></span>
                                        <div class="earn-view-text">
                                            <p class="name-text">
                                                Wallet Ballane
                                            </p>
                                            <h6 class="balance-text">
                                                $1684.54
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                    <div class="earn-view">
                                        <span class="fas fa-heart earn-icon referral"></span>
                                        <div class="earn-view-text">
                                            <p class="name-text">
                                                Referral Earning
                                            </p>
                                            <h6 class="balance-text">
                                                $1204.54
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                    <div class="earn-view">
                                        <span class="fab fa-salesforce earn-icon sales"></span>
                                        <div class="earn-view-text">
                                            <p class="name-text">
                                                Estimate Sales
                                            </p>
                                            <h6 class="balance-text">
                                                $154.54
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 my-1 bdr-cls my-1 bdr-cls">
                                    <div class="earn-view">
                                        <span class="fas fa-chart-line earn-icon earning"></span>
                                        <div class="earn-view-text">
                                            <p class="name-text">
                                                Earning 
                                            </p>
                                            <h6 class="balance-text">
                                                $10684.54
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>

                           <!-- important -->
                    
                </div>

           
            </div>
        </div>
    </section>
    
    <section>
        <div class="sm-chart-sec my-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                        <div class="revinue revinue-one_hybrid">
                            <div class="revinue-hedding">
                                <div class="w-title py-3 px-3">
                                    <div class="w-icon">
                                        <span class="fas fa-users"></span>
                                        
                                    </div>
                                    <div class="sm-chart-text ">
                                        <p class="w-value">31.9K</p>
                                        <h5>Followers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="revinue-content">
                                <div id="hybrid_followers"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                        <div class="revinue page-one_hybrid">
                            <div class="revinue-hedding">
                                <div class="w-title py-3 px-3">
                                    <div class="w-icon">
                                        <i class="fa-solid fa-pager"></i>                                            
                                    </div>
                                    <div class="sm-chart-text">
                                        <p class="w-value">Page View</p>
                                        <h5>654322</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="revinue-content">
                                <div id="hybrid_followers1"></div>
                            </div>
                        </div>

                       
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                        <div class="revinue bonuce-one_hybrid">
                            <div class="revinue-hedding">
                                <div class="w-title py-3 px-3">
                                    <div class="w-icon">
                                        <i class="fa-regular fa-scale-unbalanced"></i>                                           
                                    </div>
                                    <div class="sm-chart-text">
                                        <p class="w-value">$433</p>
                                        <h5>Bonuce Rate</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="revinue-content">
                                <div id="hybrid_followers2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                        <div class="revinue rv-status-one_hybrid">
                            <div class="revinue-hedding">
                                <div class="w-title py-3 px-3">
                                    <div class="w-icon">
                                        <i class="bi bi-star-fill"></i> 
                                     </div>
                                    <div class="sm-chart-text">
                                        <h5>$765 <small>jan 01 - jan 10</small></h5>
                                        <p class="w-value">Revinue Status</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="revinue-content">
                                <div id="hybrid_followers3"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

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