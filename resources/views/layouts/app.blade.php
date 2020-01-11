<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<?php
// $date = "2016-11-24 22:59:59";
// $carbon_date = Carbon\Carbon::parse($date);
// echo $carbon_date;
?>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>@yield('title') | {{ Auth::user()->branch->company->name }}</title>
    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/all.css') }}" rel="stylesheet">
    @stack('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!--<script>-->
<!--    function display_c(){-->
<!--        var refresh=1000; // Refresh rate in milli seconds-->
<!--        mytime=setTimeout('display_ct()',refresh)-->
<!--    }-->
<!---->
<!--    function display_ct() {-->
<!--        var x = new Date()-->
<!--        document.getElementById('ct').innerHTML = x;-->
<!--        display_c();-->
<!--    }-->
<!--</script>-->
<!--<body onload=display_ct();>-->

<body>
    <!--<span id='ct' ></span>-->
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar hidethis" style="display: block">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="index.html" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <!--                            <img src="{{ URL::asset('assets/images/logo.png') }}" alt="homepage" class="dark-logo"/>-->
                                <!-- Light Logo icon -->
                                <!--                            <img src="{{ URL::asset('assets/images/logo-light-icon.png') }}" alt="homepage" class="light-logo"/>-->
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ URL::asset('assets/images/logo.png') }}" alt="homepage" class="dark-logo" width="100" height="80" />
                                <!-- Light Logo text -->
                                <!--                                <img src="{{ URL::asset('assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage"/>-->
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto cphone">
                        <!-- <li class="nav-item d-none d-md-block">
                        <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-menu font-24"></i>
                        </a>
                    </li> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ URL::asset('assets/images/users/profile.png') }}" alt="user" class="rounded-circle" width="33">
                                <span class="m-l-5 font-medium d-none d-sm-inline-block">{{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <!-- <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div> -->
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <!--Main Menu Header Start-->
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a href="{{ URL::to('/')}}" class="sidebar-link">
                                <i class="mdi mdi-arrange-bring-to-front"></i>
                                <span class="hide-menu">{{ Auth::user()->branch->company->name }}</span>
                            </a>
                        </li>

    
    
                        <!-- Back Office Main Menu-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-collage"></i>
                                <span class="hide-menu">Administration</span>
                            </a>
                            <!--First Level Menu-->
                            <ul aria-expanded="false" class="collapse first-level">
                                

                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-collage"></i>
                                        <span class="hide-menu">Manage User</span></a>
                                    <!--Second Level Menu-->
                                    <ul aria-expanded="false" class="collapse second-level">
                                                                               <li class="sidebar-item"><a href="{{ route('user.index') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> User List</span></a></li>
                                        <li class="sidebar-item"><a href="{{ route('user.create') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> New User</span></a></li>
                                    </ul>

                                    <!--Second Level Menu End-->
                                </li>



                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-collage"></i>
                                        <span class="hide-menu">Setting</span></a>
                                    <!--Second Level Menu-->
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="{{ route('company.index') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Company Information</span></a>
                                        </li>

                                        <li class="sidebar-item"><a href="{{ route('branch.index') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Branch Information</span></a>
                                        </li>
                                    </ul>

                                    <!--Second Level Menu End-->
                                </li>


                            </ul>
                            <!--First Level Menu End-->
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="#" aria-expanded="false">
                                <i class="mdi mdi-collage"></i>
                                <span class="hide-menu">Menu</span>
                            </a>
                            <!--First Level Menu-->
                            <ul aria-expanded="false" class="collapse first-level">
                                

                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-collage"></i>
                                        <span class="hide-menu">Manage ISP</span></a>
                                    <!--Second Level Menu-->
                                    <ul aria-expanded="false" class="collapse second-level">
                                                                               <li class="sidebar-item"><a href="{{ route('user.index') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> ISP List</span></a></li>
                                        <li class="sidebar-item"><a href="{{ route('user.create') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> New ISP</span></a></li>
                                    </ul>

                                    <!--Second Level Menu End-->
                                </li>



                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                        <i class="mdi mdi-collage"></i>
                                        <span class="hide-menu">Setting</span></a>
                                    <!--Second Level Menu-->
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="{{ route('company.index') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Company Information</span></a>
                                        </li>

                                        <li class="sidebar-item"><a href="{{ route('branch.index') }}" class="sidebar-link"><i class="mdi mdi-priority-low"></i><span class="hide-menu"> Branch Information</span></a>
                                        </li>
                                    </ul>

                                    <!--Second Level Menu End-->
                                </li>


                            </ul>
                            <!--First Level Menu End-->
                        </li>
                        <!--Back Office Main Menu End-->


                        
                

                    <!--Login User Profile Start-->
                    <li class="nav-item dropdown tests">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ URL::asset('assets/images/users/profile.png') }}" alt="user" class="rounded-circle" width="33">
                            <span class="m-l-5 font-medium d-none d-sm-inline-block">{{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY test">
                            <span class="with-arrow">
                                <span class="bg-primary"></span>
                            </span>
                            @foreach(\App\Models\Administration\Settings\Branch::all() as $branch)
                            <a class="dropdown-item {{ ($branch->id == session()->get('branch_id') ? 'text-success':'') }}" href="{{route('switcher',$branch->id)}}">
                                <i class="fa fa-home m-r-5 m-l-5"></i> {{ $branch->name }}</a>
                            @endforeach
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!--Login User Profile End-->

                    </ul>
                    <!--Main Menu Header End-->

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Submenu Header Start -->
                <!-- ============================================================== -->
                
                
                
                <!-- ============================================================== -->
                <!-- Submenu Header End -->
                <!-- ============================================================== -->
                @yield('content')

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by
                <a href="#">###.</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="{{ URL::asset('js/all.js') }}"></script>

    {{--Ajax Loader--}}
    <div id="loading" class="preloader" style="background-color: rgba(45, 45, 45, .2); display: none">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            /*Set First Input Field  Focused*/
            $('input:visible:enabled:first').focus();

            // $("#resultTable").dataTable();
        });
    </script>

    @stack('js')


</body>

</html>
