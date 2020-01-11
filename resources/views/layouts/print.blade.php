<!-- Custom CSS -->
<link href="{{ URL::asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
<!-- Custom CSS -->
<link href="{{ URL::asset('assets/dist/css/style.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/dist/css/custom_style.css') }}" rel="stylesheet">
@stack('css')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
    @media print {
        #btn {
            display: none;
        }
    }
</style>

@yield('content')


<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script data-cfasync="false" src="{{ URL::asset('assets/dist/js/email-decode.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ URL::asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- apps -->
<script src="{{ URL::asset('assets/dist/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/dist/js/app.init.horizontal.js') }}"></script>
<script src="{{ URL::asset('assets/dist/js/app-style-switcher.horizontal.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ URL::asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ URL::asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ URL::asset('assets/dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ URL::asset('assets/dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ URL::asset('assets/dist/js/custom.js') }}"></script>

{{--Ajax Loader--}}
<div id="loading" class="preloader" style="background-color: rgba(45, 45, 45, .2); display: none">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>


@stack('js')
