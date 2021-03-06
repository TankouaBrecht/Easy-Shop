<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend//images/favicon.ico') }}">

    <title>Easy Shop Admin</title> 
    <!-- {{ asset('') }} -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

@include('admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

   @yield('admin')

  </div>
  <!-- /.content-wrapper -->
  @include('admin.body.footer')
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS --> 
    <!-- {{ asset('') }} -->
    
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>

	
	<!-- Sunny Admin App -->
	<script src="{{ asset('backend/js/template.js') }}"></script>
	<script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <!-- <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('backend/js/pages/data-table.js') }}"></script> -->
</body>
</html>
<script>
    @if (Session('success'))
      toastr.success("{{ Session::get('success') }}")
    @endif
  </script>
