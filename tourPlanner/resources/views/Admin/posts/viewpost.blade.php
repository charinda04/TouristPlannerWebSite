@extends('Admin/index')

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
            <form  role="form" method="POST" action="{{ url('/admin/locationcomment/'.sprintf("%s",$place->id )) }}">
              {{ csrf_field() }}
              <div class="form-group">
                <textarea class="form-control" rows="3" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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