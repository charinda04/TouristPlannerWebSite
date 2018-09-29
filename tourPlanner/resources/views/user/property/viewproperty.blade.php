@extends('user/index')

@section('content')


<div class="container">
  <div class="col-lg-10">
    @foreach($properties as $property)
    <br>
    <a href="{{ url('user/properties') }}" class="btn btn-info">Back</a>

    @if((($property->admin_permission) == 1) && (($property->user_id) == $user_id))
    @if((($property->status) == 0) )
    
    <a href="{{ url('user/publishproperty/'.sprintf("%s",$property->id )) }}" class="btn btn-success">Publish</a>
    
    @else

    
    
    <a href="{{ url('user/unpublishproperty/' .sprintf("%s",$property->id )) }}" class="btn btn-danger">Unpublish</a>
    
    @endif
    @endif

    


    <!-- Title -->
    <h1 class="mt-4">{{ $property->title }}</h1>
    
    <!-- Author -->
    <p class="lead">
      {{-- by
        <a href="#">Start Bootstrap</a> --}}
      </p>
      
      <hr>
      
      <!-- Date/Time -->
      <p>Posted on {{ $property->created_at }}</p>
      
      <hr>
      
      <!-- Preview Image -->
      <img class="img-fluid rounded" src="{{ asset('properties/'.sprintf("%s",$property->photo1 )) }}" alt="">  
      {{--  900x300  --}}
      
      <hr>
      
      <!-- Post Content -->
      <h4>Price : {{ $property->rent }} per day</h4>
      <p class="lead">{{ $property->summery }}</p>
      
      
      {{-- 
        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote> --}}
        
        {{-- {{url('/admin/editpost/'.sprintf("%s",$place->id ))}} --}}
        
        @endforeach
        <br>
        <hr>
        
        @if($user_id == $property->id)
        <form role="form" method="POST" action="{{url('/user/confirmbooking/'.sprintf("%s",$property->id ))}}"  enctype="multipart/form-data">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label>No of days</label>
                <input id="days" type="number" class="form-control" name="days"  required>
                <br>
                <button type="submit" class="btn btn-success">Book Now</button>
              </div>
            </div>

            
            
          </div>

        </form>
        @endif
        <br>

        {{-- <a href="{{ url('user/properties') }}" class="btn btn-success">Book Now</a> --}}


        <hr>
        <br>
        
        @foreach($properties as $property)
        @if( ($property->user_id) != $user_id)
        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form  role="form" method="POST" action="{{ url('/user/propertycomment/'.sprintf("%s",$property->id )) }}">
              {{ csrf_field() }}
              <div class="form-group">
                <textarea class="form-control" rows="3" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        @endif
        @endforeach

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