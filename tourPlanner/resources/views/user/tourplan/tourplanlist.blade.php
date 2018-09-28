@extends('user/index')

@section('content')

    <div class="container">

        {{-- <a href="{{ url('user/mapview) }}" class="btn btn-success">Publish</a> --}}

        <a href="{{ url('user/mapview') }}" class="btn btn-info">Back</a>

        <button  class="btn btn-success" disabled="disabled">dsfsdfsdfsd</button>

        {{-- <div class="row">
            @foreach($places as $key => $place)
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="{{ url('user/viewlocation/'.sprintf("%s",$place->id ))}}"><img class="card-img-top" src="{{ asset('locations/'.sprintf("%s",$place->photo1 )) }}" alt=""></a>
                 700x400 
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{ url('user/viewlocation/'.sprintf("%s",$place->id ))}}">{{$place->title}}</a>
                  </h4>
                  <p class="demo2">{{$place->description}}</p>
                </div>
              </div>
            </div>
            @endforeach
            
            
          </div> --}}


    </div>

@endsection