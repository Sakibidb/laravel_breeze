<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    <!-- plugins {{asset('assets/images/image.png')}} -->
    <link href="{{asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" >
    <link href="{{asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <!-- loader-->
	  <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet">
	  <script src="{{asset('assets/js/pace.min.js')}}"></script>
    <!--Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" >

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/semi-dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/minimal-theme.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/shadow-theme.css')}}" rel="stylesheet">
     
  </head>
  <body>

    @include('backend.layouts.header')
    @include('backend.layouts.sidebar')

    @yield('content')
    @include('backend.layouts.search')
    @include('backend.layouts.footer')
      


    
 

    


   <!--plugins-->
   <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
   <script src="{{asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
   <script src="{{asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
   <script src="{{asset('assets/plugins/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('assets/js/index.js')}}"></script>
    <!--BS Scripts-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    @yield('scripts')
    <script src="{{asset('assets/js/main.js')}}"></script>
  </body>
</html>