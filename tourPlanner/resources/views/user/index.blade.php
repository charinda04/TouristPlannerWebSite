<!DOCTYPE html>
<html>
<head>
  <title>Tour Planner</title>
  <link rel="icon" type="image/png" href="{{ asset('icons/1.png') }}" />

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


  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <style>
      .card1{
        width:400px; adjust this value according your requirement
        align: "left";
      }
    </style>
</head> 
<body>
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
  
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <!-- date-range-picker -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
      <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

      <!-- AdminLTE App -->
      <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<script>
  //Date range picker
  $('#reservation').daterangepicker()
</script>

<script type="text/javascript" src="https://cdn.rawgit.com/vaakash/jquery-collapser/master/jquery.collapser.min.js"></script>

<script>
    $(document).ready(function(){
      $('.demo2').collapser({ 
        mode: 'words',
        truncate: 30,
        
      });
    });
</script>
      


</body>
</html>