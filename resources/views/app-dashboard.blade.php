@extends('layouts.app')
@section('title','Dashboard')
@section('content')
    <style>
        .active-color{
        background: linear-gradient(180deg,#6edcc4,#1aab8b);
        }
        .common-color{
            background: linear-gradient(0deg,#f19a1a,#ffc73c);
        }
    </style>

    <br>
    <br>
    <br>
    <br>
    <h1 class="text-center mt-5">
         <span
             style="color: black"
             class="txt-rotate"
             data-period="2000"
             data-rotate='["Welcome to {{ Auth::user()->branch->company->name }} Dashboard!"]'>
         </span>
    </h1>




{{--<!-- ============================================================== -->--}}
{{--<!-- Sales chart -->--}}
{{--<!-- ============================================================== -->--}}
{{--
<div class="card-group">--}}
    {{--
    <div class="card">--}}
        {{--
        <div class="card-body">--}}
            {{--
            <div class="row">--}}
                {{--
                <div class="col-md-12">--}}
                    {{--
                    <div class="d-flex no-block align-items-center">--}}
                        {{--
                        <div>--}}
                            {{-- <i class="mdi mdi-emoticon font-20 text-muted"></i>--}}
                            {{-- <p class="font-16 m-b-5">New Clients</p>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                        <div class="ml-auto">--}}
                            {{-- <h1 class="font-light text-right">23</h1>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="col-12">--}}
                    {{--
                    <div class="progress">--}}
                        {{--
                        <div class="progress-bar bg-info" role="progressbar" --}}
                             {{-- style="width: 75%; height: 6px;" aria-valuenow="25" aria-valuemin="0" --}}
                             {{-- aria-valuemax="100"></div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--    <!-- Column -->--}}
    {{--    <!-- Column -->--}}
    {{--
    <div class="card">--}}
        {{--
        <div class="card-body">--}}
            {{--
            <div class="row">--}}
                {{--
                <div class="col-md-12">--}}
                    {{--
                    <div class="d-flex no-block align-items-center">--}}
                        {{--
                        <div>--}}
                            {{-- <i class="mdi mdi-image font-20  text-muted"></i>--}}
                            {{-- <p class="font-16 m-b-5">New Projects</p>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                        <div class="ml-auto">--}}
                            {{-- <h1 class="font-light text-right">169</h1>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="col-12">--}}
                    {{--
                    <div class="progress">--}}
                        {{--
                        <div class="progress-bar bg-success" role="progressbar" --}}
                             {{-- style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" --}}
                             {{-- aria-valuemax="100"></div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--    <!-- Column -->--}}
    {{--    <!-- Column -->--}}
    {{--
    <div class="card">--}}
        {{--
        <div class="card-body">--}}
            {{--
            <div class="row">--}}
                {{--
                <div class="col-md-12">--}}
                    {{--
                    <div class="d-flex no-block align-items-center">--}}
                        {{--
                        <div>--}}
                            {{-- <i class="mdi mdi-currency-eur font-20 text-muted"></i>--}}
                            {{-- <p class="font-16 m-b-5">New Invoices</p>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                        <div class="ml-auto">--}}
                            {{-- <h1 class="font-light text-right">157</h1>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="col-12">--}}
                    {{--
                    <div class="progress">--}}
                        {{--
                        <div class="progress-bar bg-purple" role="progressbar" --}}
                             {{-- style="width: 65%; height: 6px;" aria-valuenow="25" aria-valuemin="0" --}}
                             {{-- aria-valuemax="100"></div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--    <!-- Column -->--}}
    {{--    <!-- Column -->--}}
    {{--
    <div class="card">--}}
        {{--
        <div class="card-body">--}}
            {{--
            <div class="row">--}}
                {{--
                <div class="col-md-12">--}}
                    {{--
                    <div class="d-flex no-block align-items-center">--}}
                        {{--
                        <div>--}}
                            {{-- <i class="mdi mdi-poll font-20 text-muted"></i>--}}
                            {{-- <p class="font-16 m-b-5">New Sales</p>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                        <div class="ml-auto">--}}
                            {{-- <h1 class="font-light text-right">236</h1>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="col-12">--}}
                    {{--
                    <div class="progress">--}}
                        {{--
                        <div class="progress-bar bg-danger" role="progressbar" --}}
                             {{-- style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0" --}}
                             {{-- aria-valuemax="100"></div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
</div>--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Sales chart -->--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Email campaign chart -->--}}
{{--<!-- ============================================================== -->--}}
{{--
<div class="row">--}}
    {{--
    <div class="col-lg-3 col-md-6">--}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{-- <h4 class="card-title">Campaign</h4>--}}
                {{--
                <div id="campaign" style="height: 168px; width: 100%;" class="m-t-10"></div>
                --}}
                {{--                <!-- row -->--}}
                {{--
                <div class="row text-center text-lg-left">--}}
                    {{--                    <!-- column -->--}}
                    {{--
                    <div class="col-4">--}}
                        {{-- <h4 class="m-b-0 font-medium">60%</h4>--}}
                        {{-- <span class="text-muted">Open</span>--}}
                        {{--
                    </div>
                    --}}
                    {{--                    <!-- column -->--}}
                    {{--
                    <div class="col-4">--}}
                        {{-- <h4 class="m-b-0 font-medium">26%</h4>--}}
                        {{-- <span class="text-muted">Click</span>--}}
                        {{--
                    </div>
                    --}}
                    {{--                    <!-- column -->--}}
                    {{--
                    <div class="col-4">--}}
                        {{-- <h4 class="m-b-0 font-medium">18%</h4>--}}
                        {{-- <span class="text-muted">Bounce</span>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{-- <h5 class="card-title m-b-5">Referral Earnings</h5>--}}
                {{-- <h3 class="font-light">$769.08</h3>--}}
                {{--
                <div class="m-t-20 text-center">--}}
                    {{--
                    <div id="earnings"></div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
    <div class="col-lg-6 col-md-12 order-lg-2 order-md-3">--}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{--
                <div class="d-flex align-items-center">--}}
                    {{--
                    <div>--}}
                        {{-- <h4 class="card-title">Sales Ratio</h4>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="ml-auto">--}}
                        {{--
                        <div class="dl m-b-10">--}}
                            {{-- <select class="custom-select border-0 text-muted">--}}
                                {{--
                                <option value="0" selected="">August 2018</option>
                                --}}
                                {{--
                                <option value="1">May 2018</option>
                                --}}
                                {{--
                                <option value="2">March 2018</option>
                                --}}
                                {{--
                                <option value="3">June 2018</option>
                                --}}
                                {{-- </select>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="d-flex align-items-center no-block">--}}
                    {{--
                    <div>--}}
                        {{-- <span class="text-muted">This Week</span>--}}
                        {{--
                        <h3 class="mb-0 text-info font-light">$23.5K <span class="text-muted font-12"><i--}}
{{--                                        class="mdi mdi-arrow-up text-success"></i>18.6</span></h3>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="ml-4">--}}
                        {{-- <span class="text-muted">Last Week</span>--}}
                        {{--
                        <h3 class="mb-0 text-muted font-light">$945 <span class="text-muted font-12"><i--}}
{{--                                        class="mdi mdi-arrow-down text-danger"></i>46.3</span></h3>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="sales ct-charts mt-5"></div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
    <div class="col-lg-3 col-md-6 order-lg-3 order-md-2">--}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body m-b-0">--}}
                {{-- <h4 class="card-title">Thursday <span
                            class="font-14 font-normal text-muted">12th April, 2018</span>--}}
                    {{-- </h4>--}}
                {{--
                <div class="d-flex align-items-center flex-row m-t-30">--}}
                    {{-- <h1 class="font-light"><i class="wi wi-day-sleet"></i> <span>35<sup>°</sup></span></h1>--}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
            <div class="weather-report" style="height:120px; width:100%;"></div>
            --}}
            {{--
        </div>
        --}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{-- <h4 class="card-title m-b-0">Users</h4>--}}
                {{-- <h2 class="font-light">35,658 <span class="font-16 text-success font-medium">+23%</span>--}}
                    {{-- </h2>--}}
                {{--
                <div class="m-t-30">--}}
                    {{--
                    <div class="row text-center">--}}
                        {{--
                        <div class="col-6 border-right">--}}
                            {{-- <h4 class="m-b-0">58%</h4>--}}
                            {{-- <span class="font-14 text-muted">New Users</span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                        <div class="col-6">--}}
                            {{-- <h4 class="m-b-0">42%</h4>--}}
                            {{-- <span class="font-14 text-muted">Repeat Users</span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
</div>--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Email campaign chart -->--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Ravenue - page-view-bounce rate -->--}}
{{--<!-- ============================================================== -->--}}
{{--
<div class="row">--}}
    {{--    <!-- column -->--}}
    {{--
    <div class="col-lg-6 col-md-12">--}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{--
                <div class="d-flex align-items-center">--}}
                    {{--
                    <div>--}}
                        {{-- <h4 class="card-title mb-0">Latest Sales</h4>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="ml-auto">--}}
                        {{-- <select class="custom-select border-0 text-muted">--}}
                            {{--
                            <option value="0" selected="">August 2018</option>
                            --}}
                            {{--
                            <option value="1">May 2018</option>
                            --}}
                            {{--
                            <option value="2">March 2018</option>
                            --}}
                            {{--
                            <option value="3">June 2018</option>
                            --}}
                            {{-- </select>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
            <div class="card-body bg-light">--}}
                {{--
                <div class="row align-items-center">--}}
                    {{--
                    <div class="col-xs-12 col-md-6">--}}
                        {{-- <h3 class="m-b-0 font-light">August 2018</h3>--}}
                        {{-- <span class="font-14 text-muted">Sales Report</span>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="col-xs-12 col-md-6 align-self-center display-6 text-info text-right">--}}
                        {{-- $3,690--}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
            <div class="table-responsive">--}}
                {{--
                <table class="table table-hover">--}}
                    {{--
                    <thead>--}}
                    {{--
                    <tr>--}}
                        {{--
                        <th class="border-top-0">NAME</th>
                        --}}
                        {{--
                        <th class="border-top-0">STATUS</th>
                        --}}
                        {{--
                        <th class="border-top-0">DATE</th>
                        --}}
                        {{--
                        <th class="border-top-0">PRICE</th>
                        --}}
                        {{--
                    </tr>
                    --}}
                    {{--
                    </thead>
                    --}}
                    {{--
                    <tbody>--}}
                    {{--
                    <tr>--}}

                        {{--
                        <td class="txt-oflo">Elite admin</td>
                        --}}
                        {{--
                        <td><span class="label label-success label-rounded">SALE</span></td>
                        --}}
                        {{--
                        <td class="txt-oflo">April 18, 2017</td>
                        --}}
                        {{--
                        <td><span class="font-medium">$24</span></td>
                        --}}
                        {{--
                    </tr>
                    --}}
                    {{--
                    <tr>--}}

                        {{--
                        <td class="txt-oflo">Real Homes WP Theme</td>
                        --}}
                        {{--
                        <td><span class="label label-info label-rounded">EXTENDED</span></td>
                        --}}
                        {{--
                        <td class="txt-oflo">April 19, 2017</td>
                        --}}
                        {{--
                        <td><span class="font-medium">$1250</span></td>
                        --}}
                        {{--
                    </tr>
                    --}}
                    {{--
                    <tr>--}}

                        {{--
                        <td class="txt-oflo">Ample Admin</td>
                        --}}
                        {{--
                        <td><span class="label label-purple label-rounded">Tax</span></td>
                        --}}
                        {{--
                        <td class="txt-oflo">April 19, 2017</td>
                        --}}
                        {{--
                        <td><span class="font-medium">$1250</span></td>
                        --}}
                        {{--
                    </tr>
                    --}}
                    {{--
                    <tr>--}}

                        {{--
                        <td class="txt-oflo">Medical Pro WP Theme</td>
                        --}}
                        {{--
                        <td><span class="label label-success label-rounded">Sale</span></td>
                        --}}
                        {{--
                        <td class="txt-oflo">April 20, 2017</td>
                        --}}
                        {{--
                        <td><span class="font-medium">-$24</span></td>
                        --}}
                        {{--
                    </tr>
                    --}}
                    {{--
                    <tr>--}}

                        {{--
                        <td class="txt-oflo">Hosting press html</td>
                        --}}
                        {{--
                        <td><span class="label label-success label-rounded">SALE</span></td>
                        --}}
                        {{--
                        <td class="txt-oflo">April 21, 2017</td>
                        --}}
                        {{--
                        <td><span class="font-medium">$24</span></td>
                        --}}
                        {{--
                    </tr>
                    --}}
                    {{--
                    <tr>--}}

                        {{--
                        <td class="txt-oflo">Digital Agency PSD</td>
                        --}}
                        {{--
                        <td><span class="label label-danger label-rounded">Tax</span></td>
                        --}}
                        {{--
                        <td class="txt-oflo">April 23, 2017</td>
                        --}}
                        {{--
                        <td><span class="font-medium">-$14</span></td>
                        --}}
                        {{--
                    </tr>
                    --}}
                    {{--
                    </tbody>
                    --}}
                    {{--
                </table>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
    <div class="col-lg-6 col-md-12">--}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{--
                <div class="d-flex align-items-center">--}}
                    {{--
                    <div>--}}
                        {{-- <h4 class="card-title m-b-0">Top Region Sales</h4>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="ml-auto">--}}
                        {{--
                        <div class="dl">--}}
                            {{-- <select class="custom-select border-0 text-muted">--}}
                                {{--
                                <option value="0" selected="">August 2018</option>
                                --}}
                                {{--
                                <option value="1">May 2018</option>
                                --}}
                                {{--
                                <option value="2">March 2018</option>
                                --}}
                                {{--
                                <option value="3">June 2018</option>
                                --}}
                                {{-- </select>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div id="visitfromworld" style="height: 365px"></div>
                --}}
                {{--                <!-- row -->--}}
                {{--
                <div class="row m-t-40 text-center text-lg-left">--}}
                    {{--                    <!-- column -->--}}
                    {{--
                    <div class="col-xs-12 col-md-4">--}}
                        {{--
                        <div class="mb-2 mt-2">--}}
                            {{-- <span class="label label-success label-rounded">+23%</span>--}}
                            {{-- <h5 class="font-normal text-muted m-t-10 m-b-5">United States</h5>--}}
                            {{-- <span class="font-20 font-medium">3234 <span--}}
{{--                                        class="font-14 font-normal text-muted">($3549.54)</span></span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--                    <!-- column -->--}}
                    {{--
                    <div class="col-xs-12 col-md-4">--}}
                        {{--
                        <div class="mb-2 mt-2">--}}
                            {{-- <span class="label label-info label-rounded">+0.5%</span>--}}
                            {{-- <h5 class="font-normal text-muted m-t-10 m-b-5">Europe</h5>--}}
                            {{-- <span class="font-20 font-medium">2548 <span--}}
{{--                                        class="font-14 font-normal text-muted">($3549.54)</span></span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--                    <!-- column -->--}}
                    {{--
                    <div class="col-xs-12 col-md-4">--}}
                        {{--
                        <div class="mb-2 mt-2">--}}
                            {{-- <span class="label label-danger label-rounded">-18%</span>--}}
                            {{-- <h5 class="font-normal text-muted m-t-10 m-b-5">Australia</h5>--}}
                            {{-- <span class="font-20 font-medium">1476 <span--}}
{{--                                        class="font-14 font-normal text-muted">($3549.54)</span></span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
</div>--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Ravenue - page-view-bounce rate -->--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Recent comment and chats -->--}}
{{--<!-- ============================================================== -->--}}
{{--
<div class="row">--}}
    {{--    <!-- column -->--}}
    {{--
    <div class="col-lg-6">--}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{-- <h4 class="card-title">Recent Comments</h4>--}}
                {{--
            </div>
            --}}
            {{--
            <div class="comment-widgets scrollable" style="height:430px;">--}}
                {{--                <!-- Comment Row -->--}}
                {{--
                <div class="d-flex flex-row comment-row m-t-0">--}}
                    {{--
                    <div class="p-2">--}}
                        {{-- <img src="{{ URL::asset('assets/images/users/1.jpg') }}" alt="user" width="50"
                                  class="rounded-circle">--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="comment-text w-100">--}}
                        {{-- <h6 class="font-medium">James Anderson</h6>--}}
                        {{-- <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>--}}
                        {{--
                        <div class="comment-footer">--}}
                            {{-- <span class="text-muted float-right">April 14, 2016</span>--}}
                            {{-- <span class="label label-rounded label-primary">Pending</span>--}}
                            {{-- <span class="action-icons">--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-pencil-alt"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-check"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-heart"></i>--}}
{{--                                                </a>--}}
{{--                                            </span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--                <!-- Comment Row -->--}}
                {{--
                <div class="d-flex flex-row comment-row">--}}
                    {{--
                    <div class="p-2">--}}
                        {{-- <img src="{{ URL::asset('assets/images/users/4.jpg') }}" alt="user" width="50"
                                  class="rounded-circle">--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="comment-text active w-100">--}}
                        {{-- <h6 class="font-medium">Michael Jorden</h6>--}}
                        {{-- <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>--}}
                        {{--
                        <div class="comment-footer ">--}}
                            {{-- <span class="text-muted float-right">April 14, 2016</span>--}}
                            {{-- <span class="label label-success label-rounded">Approved</span>--}}
                            {{-- <span class="action-icons active">--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-pencil-alt"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="icon-close"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-heart text-danger"></i>--}}
{{--                                                </a>--}}
{{--                                            </span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--                <!-- Comment Row -->--}}
                {{--
                <div class="d-flex flex-row comment-row">--}}
                    {{--
                    <div class="p-2">--}}
                        {{-- <img src="{{ URL::asset('assets/images/users/5.jpg') }}" alt="user" width="50"
                                  class="rounded-circle">--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="comment-text w-100">--}}
                        {{-- <h6 class="font-medium">Johnathan Doeting</h6>--}}
                        {{-- <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>--}}
                        {{--
                        <div class="comment-footer">--}}
                            {{-- <span class="text-muted float-right">April 14, 2016</span>--}}
                            {{-- <span class="label label-rounded label-danger">Rejected</span>--}}
                            {{-- <span class="action-icons">--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-pencil-alt"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-check"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-heart"></i>--}}
{{--                                                </a>--}}
{{--                                            </span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--                <!-- Comment Row -->--}}
                {{--
                <div class="d-flex flex-row comment-row m-t-0">--}}
                    {{--
                    <div class="p-2">--}}
                        {{-- <img src="{{ URL::asset('assets/images/users/2.jpg') }}" alt="user" width="50"
                                  class="rounded-circle">--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="comment-text w-100">--}}
                        {{-- <h6 class="font-medium">Steve Jobs</h6>--}}
                        {{-- <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>--}}
                        {{--
                        <div class="comment-footer">--}}
                            {{-- <span class="text-muted float-right">April 14, 2016</span>--}}
                            {{-- <span class="label label-rounded label-primary">Pending</span>--}}
                            {{-- <span class="action-icons">--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-pencil-alt"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-check"></i>--}}
{{--                                                </a>--}}
{{--                                                <a href="javascript:void(0)">--}}
{{--                                                    <i class="ti-heart"></i>--}}
{{--                                                </a>--}}
{{--                                            </span>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--    <!-- column -->--}}
    {{--
    <div class="col-lg-6">--}}
        {{--
        <div class="card">--}}
            {{--
            <div class="card-body">--}}
                {{--
                <div class="d-flex align-items-center p-b-15">--}}
                    {{--
                    <div>--}}
                        {{-- <h4 class="card-title m-b-0">To Do List</h4>--}}
                        {{--
                    </div>
                    --}}
                    {{--
                    <div class="ml-auto">--}}
                        {{--
                        <div class="dl">--}}
                            {{-- <select class="custom-select border-0 text-muted">--}}
                                {{--
                                <option value="0" selected="">August 2018</option>
                                --}}
                                {{--
                                <option value="1">May 2018</option>
                                --}}
                                {{--
                                <option value="2">March 2018</option>
                                --}}
                                {{--
                                <option value="3">June 2018</option>
                                --}}
                                {{-- </select>--}}
                            {{--
                        </div>
                        --}}
                        {{--
                    </div>
                    --}}
                    {{--
                </div>
                --}}
                {{--
                <div class="todo-widget scrollable" style="height:422px;">--}}
                    {{--
                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">--}}
                        {{--
                        <li class="list-group-item todo-item" data-role="task">--}}
                            {{--
                            <div class="custom-control custom-checkbox">--}}
                                {{-- <input type="checkbox" class="custom-control-input" id="customCheck">--}}
                                {{-- <label class="custom-control-label todo-label" for="customCheck">--}}
                                    {{-- <span
                                            class="todo-desc">Simply dummy text of the printing and typesetting</span>--}}
                                    {{-- <span class="badge badge-pill badge-success float-right">Project</span>--}}
                                    {{-- </label>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </li>
                        --}}
                        {{--
                        <li class="list-group-item todo-item" data-role="task">--}}
                            {{--
                            <div class="custom-control custom-checkbox">--}}
                                {{-- <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
                                {{-- <label class="custom-control-label todo-label" for="customCheck1">--}}
                                    {{-- <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</span>
                                    <span--
                                            }}
                                            {{-- class="badge badge-pill badge-danger float-right">Project</span>--}}
                                        {{--
                                </label>--}}
                                {{--
                            </div>
                            --}}

                            {{--
                        </li>
                        --}}
                        {{--
                        <li class="list-group-item todo-item" data-role="task">--}}
                            {{--
                            <div class="custom-control custom-checkbox">--}}
                                {{-- <input type="checkbox" class="custom-control-input" id="customCheck2">--}}
                                {{-- <label class="custom-control-label todo-label" for="customCheck2">--}}
                                    {{-- <span class="todo-desc">Ipsum is simply dummy text of the printing</span>--}}
                                    {{-- <span class="badge badge-pill badge-info float-right">Project</span>--}}
                                    {{-- </label>--}}
                                {{--
                            </div>
                            --}}

                            {{--
                        </li>
                        --}}
                        {{--
                        <li class="list-group-item todo-item" data-role="task">--}}
                            {{--
                            <div class="custom-control custom-checkbox">--}}
                                {{-- <input type="checkbox" class="custom-control-input" id="customCheck3">--}}
                                {{-- <label class="custom-control-label todo-label" for="customCheck3">--}}
                                    {{-- <span
                                            class="todo-desc">Simply dummy text of the printing and typesetting</span>--}}
                                    {{-- <span class="badge badge-pill badge-info float-right">Project</span>--}}
                                    {{-- </label>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </li>
                        --}}
                        {{--
                        <li class="list-group-item todo-item" data-role="task">--}}
                            {{--
                            <div class="custom-control custom-checkbox">--}}
                                {{-- <input type="checkbox" class="custom-control-input" id="customCheck4">--}}
                                {{-- <label class="custom-control-label todo-label" for="customCheck4">--}}
                                    {{-- <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</span>--}}
                                    {{-- <span class="badge badge-pill badge-purple float-right">Project</span>--}}
                                    {{-- </label>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </li>
                        --}}
                        {{--
                        <li class="list-group-item todo-item" data-role="task">--}}
                            {{--
                            <div class="custom-control custom-checkbox">--}}
                                {{-- <input type="checkbox" class="custom-control-input" id="customCheck5">--}}
                                {{-- <label class="custom-control-label todo-label" for="customCheck5">--}}
                                    {{-- <span class="todo-desc">Ipsum is simply dummy text of the printing</span>--}}
                                    {{-- <span class="badge badge-pill badge-success float-right">Project</span>--}}
                                    {{-- </label>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </li>
                        --}}
                        {{--
                        <li class="list-group-item todo-item" data-role="task">--}}
                            {{--
                            <div class="custom-control custom-checkbox">--}}
                                {{-- <input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{-- <label class="custom-control-label todo-label" for="customCheck6">--}}
                                    {{-- <span
                                            class="todo-desc">Simply dummy text of the printing and typesetting</span>--}}
                                    {{-- <span class="badge badge-pill badge-primary float-right">Project</span>--}}
                                    {{-- </label>--}}
                                {{--
                            </div>
                            --}}
                            {{--
                        </li>
                        --}}
                        {{--
                    </ul>
                    --}}
                    {{--
                </div>
                --}}
                {{--
            </div>
            --}}
            {{--
        </div>
        --}}
        {{--
    </div>
    --}}
    {{--
</div>--}}
{{--<!-- ============================================================== -->--}}
{{--<!-- Recent comment and chats -->--}}
{{--<!-- ============================================================== -->--}}
@endsection


@push('js')
<!--This page JavaScript -->
<!--chartis chart-->
<!--<script src="{{ URL::asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>-->
<!--<script src="{{ URL::asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>-->
<!--c3 charts -->
<!--<script src="{{ URL::asset('assets/extra-libs/c3/d3.min.js') }}"></script>-->
<!--<script src="{{ URL::asset('assets/extra-libs/c3/c3.min.js') }}"></script>-->
<!--<script src="{{ URL::asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>-->
<!--<script src="{{ URL::asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>-->
<!--<script src="{{ URL::asset('assets/dist/js/pages/dashboards/dashboard1.js') }}"></script>-->
@endpush
