@include('layouts/head')    

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ URL::asset('assets/images/preloder2.gif')}}" alt>
        </div>
    </div>
    <!-- end preloader -->


   @include('layouts/nav')

        @yield('content')

    @include('layouts/site-footer')
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins for this template -->
    <script src="{{ URL::asset('assets/js/jquery-plugin-collection.js')}}"></script>

    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key"></script>

    <!-- Custom script for this template -->
    <script src="{{ URL::asset('assets/js/script.js')}}"></script>
</body>

</html>
