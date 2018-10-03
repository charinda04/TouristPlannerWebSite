<!DOCTYPE html>
<html>
<head>
  <title>Tour Planner</title>
  <link rel="icon" type="image/png" href="{{ asset('icons/1.png') }}" />



  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  

  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js" ></script>
  
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
  
  
  






  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">

  {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  {{-- <!-- DataTables -->
    <link href="{{ asset('/bower_components/admin-lte/datatable/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    --}}

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>


    {{-- <script>
      var $  = require( 'jquery' );
      var dt = require( 'datatables.net' )();
    </script> --}}


    <script type="text/javascript" src="https://cdn.rawgit.com/vaakash/jquery-collapser/master/jquery.collapser.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>








    
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">


    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
    .card1{
      width:400px; adjust this value according your requirement
      align: "left";
    }
  </style>
</head> 
<body >
  <!-- Navigation -->
  @include('user/navbar')

  @yield('content')

  

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright © Tour Planner Website 2018</p>
    </div>
    <!-- /.container -->
  </footer>
  












  


  <script type="text/javascript" src="https://cdn.rawgit.com/vaakash/jquery-collapser/master/jquery.collapser.min.js"></script>


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- date-range-picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

  <!-- InputMask -->
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
  <script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
  
  <!-- Select2 -->
  <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>

  <script src="{{ asset('js/custom.js') }}"></script>
  <script>
  //Date range picker
  $('#reservation').daterangepicker()

  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })

  //Initialize Select2 Elements
  $('.select2').select2()
</script>

<!-- REQUIRED SCRIPTS -->
{{-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.rawgit.com/vaakash/jquery-collapser/master/jquery.collapser.min.js"></script>


<script>
  $(document).ready(function(){
    $('.demo2').collapser({ 
      mode: 'words',
      truncate: 30,
      
    });
  });
</script>


{{-- <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );


</script> --}}

<!-- DataTables -->
{{-- <script src="{{ asset ("/bower_components/admin-lte/datatable/jquery.dataTables.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/bower_components/admin-lte/datatable/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>
<!-- EditableTables -->
<script src="{{ asset ("/bower_components/admin-lte/editable-table/mindmup-editabletable.js") }}" type="text/javascript"></script> --}}


<!-- AdminLTE -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCdTUStHZYtCINVVWtgDZyEE7gWdsoIrE&callback=myMap"></script>


<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- <!-- DataTables -->
  <link href="{{ asset('/bower_components/admin-lte/datatable/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  --}}

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
  
  
  {{-- <script>
   var $  = require( 'jquery' );
   var dt = require( 'datatables.net' )();
 </script> --}}
 
 
 <script type="text/javascript" src="https://cdn.rawgit.com/vaakash/jquery-collapser/master/jquery.collapser.min.js"></script>
 
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


</body>
</html>