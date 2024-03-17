<!DOCTYPE html>
<html lang="en"class="semi-dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    {{-- <link href="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/> --}}
    <link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/semi-dark.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <title>Rukada - School Management System</title>
    @yield('css')
     
  </head>

<body>
	
<div class="wrapper">

  @include('admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('admin')
  <!-- /.content-wrapper -->
  @include('admin.body.footer')

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  
  
</div>
<!-- ./wrapper -->
  	
	 
  <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	{{-- <script src="{{ asset('backend/plugins/chartjs/chart.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
	{{-- <script src="{{ asset('backend/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('backend/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('backend/plugins/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.js') }}"></script> --}}
  
  <!--sweetalert js-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script type="text/javascript">
      $(function() {
        $(document).on('click','#delete', function(e){
          e.preventDefault();
          var link = $(this).attr("href");

          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
            }
            })

        });
      });


  </script>

  <!--toastr js-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script type="text/javascript">
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;

        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;

        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;

        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
        
    }
    @endif 
</script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{ asset('backend/js/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('backend/js/app.js') }}"></script>
  @yield('js')
	
</body>
</html>
