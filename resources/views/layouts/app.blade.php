<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="apple-touch-icon" sizes="180x180" href="{{asset('web/images/favicon_io/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('web/images/favicon_io/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('web/images/favicon_io/favicon-16x16.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('admin/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/skin_color.css')}}">	
    <!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


</head>


            @yield('content')
    </div>


	<!-- Vendor JS -->
	<script src="{{asset('admin/js/vendors.min.js')}}"></script>
	<script src="{{asset('admin/js/pages/chat-popup.js')}}"></script>
    <script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/icons/feather-icons/feather.min.js"></script>	
    <script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/icons/feather-icons/feather.min.js"></script>
    <script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>
    <script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/vendor_components/raphael/raphael.min.js"></script>
    <script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/vendor_components/morris.js/morris.min.js"></script>
    <script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    
    <script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/icons/feather-icons/feather.min.js"></script>	
	<script src="https://etikto-admin-dashboard.multipurposethemes.com/bs5/assets/vendor_components/datatable/datatables.min.js"></script>
    <!-- Etikto Admin App -->
    <script src="{{asset('admin/js/template.js')}}"></script>
    @stack('styles-admin')
    <script src="{{asset('admin/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('admin/js/pages/calendar.js')}}"></script>

<!-- SweetAlert2 JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}'
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}'
            });
        </script>
    @endif

</body>
</html>
