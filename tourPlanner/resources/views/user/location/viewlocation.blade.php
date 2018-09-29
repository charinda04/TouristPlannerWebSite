@extends('user/index')

@section('content')



<div class="container">
  <div class="col-lg-10">
    @foreach($places as $place)
    <br>
    <a href="{{ url('admin/') }}" class="btn btn-info">Back</a>
    <!-- Title -->
    <h1 class="mt-4">{{ $place->title }}</h1>
    
    <!-- Author -->
    <p class="lead">
      {{-- by
        <a href="#">Start Bootstrap</a> --}}
      </p>
      
      <hr>
      
      <!-- Date/Time -->
      <p>Posted on {{ $place->created_at }}</p>
      
      <hr>
      
      <!-- Preview Image -->
      <img class="img-fluid rounded" src="{{ asset('locations/'.sprintf("%s",$place->photo1 )) }}" alt="">  
      {{--  900x300  --}}
      
      <hr>
      
      <!-- Post Content -->
      <p class="lead">{{ $place->description }}</p>
      
      
      {{-- 
        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote> --}}
        
        
        
        @endforeach
        <hr>
        
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form  role="form" method="POST" action="{{ url('/user/locationcomment/'.sprintf("%s",$place->id )) }}">
              {{ csrf_field() }}
              <div class="form-group">
                <textarea class="form-control" rows="3" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>


        <div class="card my-4">
          <h5 class="card-header">Filter Comments</h5>
          <div class="card-body">
            
            <div class="row">
              {{-- <label class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label> --}}
              
              {{--  <div class="col-md-3">  --}}
               
                

                <form  role="form" method="POST" action="{{ url('/user/viewlocation/'.sprintf("%s",$place->id )) }}">
                  {{ csrf_field() }}
                  {{--  <div class="form-group">  --}}


                    <label>Country</label>

                    {{--  <textarea class="form-control" rows="3" name="comment"></textarea>  --}}
                    <select select id="country" name="country" onclick=filterData()>
                      @foreach ($countries as $row)
                      <option id="country" value={{$row->Country}}>{{$row->Country}}</option>
                      @endforeach
                    </select>
                    <input type="hidden" value="1" id=  "filterCheck">
                  {{--  </div>  --}}
                  <button type="submit" class="btn btn-primary">Filter</button>
                </form>






                

              {{--  </div>  --}}
              {{--  
                <script>
                  
                  function refresh(){
                    $.ajax({
                      type: "GET",
                      url: "server.php",
                      success: function(data){
                        $('tbody').html(data);
                      }
                    });
                  }



                  function filterData(str){
                    var id = $place->id;
                    $.ajax({
                      type: "GET",
                      url: "server.php?p=del",
                      data: "id="+id,
                      success: function(data){
                        viewData();
                      }

                    });
                  }
                </script>  --}}
                {{--                               
                  <script>
                    $(function () {
                      $("select").select2();
                    });
                    
                    $(document).ready(function() {
                      $(".js-example-basic-multiple").select2();
                    });
                  </script>
                  --}}
                  
                </div>
              </div>
            </div>
            


            
            <!-- Single Comment -->
            @foreach($comments as $comment)
            <div class="media mb-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">{{ $comment->name }}</h5>
                {{ $comment->comment }}
              </div>
            </div>
            @endforeach
            
            
          </div>
        </div>



        @endsection