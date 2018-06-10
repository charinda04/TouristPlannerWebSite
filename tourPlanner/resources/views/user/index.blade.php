<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">


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
          <p class="m-0 text-center text-white">Copyright © Your Website 2018</p>
        </div>
        <!-- /.container -->
      </footer>
  
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


</body>
</html>