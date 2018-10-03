@extends('user/index')

@section('content')

<div class="container">

  <br>
  <form autocomplete="off" method="POST" action="{{url('/user/search_result')}}">
    {{ csrf_field() }}
    
    <div class="input-group input-group-sm">
      <div class="autocomplete input-group input-group-sm">
        <input type="text" id="myInput" name="place" placeholder="Enter a place to search" class="form-control">
        <span class="input-group-append">
          <button type="submit" class="btn btn-info btn-flat">Search!</button>
        </span>
      </div>
    </div>
  </form>
  <br>
  <div class="row">
    @foreach($places as $key => $place)
    <div class="col-lg-4 col-sm-6 portfolio-item">
      <div class="card h-100">
        <a href="{{ url('user/viewlocation/'.sprintf("%s",$place->id ))}}"><img class="card-img-top" src="{{ asset('locations/'.sprintf("%s",$place->photo1 )) }}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="{{ url('user/viewlocation/'.sprintf("%s",$place->id ))}}">{{$place->title}}</a>
          </h4>
          <p class="demo2">{{$place->description}}</p>
        </div>
      </div>
    </div>
    @endforeach
    
    
  </div>
</div>


@endsection