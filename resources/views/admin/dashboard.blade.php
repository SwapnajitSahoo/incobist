<x-app-layout>
   
    @section('page_title','Dashboard')
    <!--Row-->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Top Product Sales Overview</h3>
                    <div class="card-options">
                        <a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Last Week</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                            <a class="dropdown-item" href="#">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
                            <thead class="">
                                <tr>
                                    <th>Product</th>
                                    <th>Sold</th>
                                    <th>Record point</th>
                                    <th>Stock</th>
                                    <th>Amount</th>
                                    <th>Stock Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="assets/images/orders/7.jpg" alt="media1"> New Book</td>
                                    <td><span class="badge badge-primary">18</span></td>
                                    <td>05</td>
                                    <td>112</td>
                                    <td class="number-font">$ 2,356</td>
                                    <td><i class="fa fa-check mr-1 text-success"></i> In Stock</td>
                                </tr>
                                
                                <tr>
                                    <td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="assets/images/orders/13.jpg" alt="media1"> Branded Shoes</td>
                                    <td><span class="badge badge-success">11</span></td>
                                    <td>04</td>
                                    <td>0</td>
                                    <td class="number-font">$ 3,256</td>
                                    <td><i class="fa fa-exclamation-triangle text-warning"></i> Out of stock</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End row-->
</x-app-layout>