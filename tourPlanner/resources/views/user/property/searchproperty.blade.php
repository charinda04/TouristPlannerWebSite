@extends('user/index')

@section('content')

<br>
<div class="container-fluid">
<div class="row">
  
      
  @foreach($properties as $key => $property)
  <div class="col-lg-2 col-sm-2 portfolio-item">
    <div class="card h-100">
      <a href="{{ url('user/viewproperty/'.sprintf("%s",$property->id ))}}"><img class="card-img-top" src="{{ asset('properties/'.sprintf("%s",$property->photo1 )) }}" alt=""></a>
      {{--  700x400  --}}
      <div class="card-body">
        <h4 class="card-title">
          <a href="{{ url('user/viewproperty/'.sprintf("%s",$property->id ))}}">{{$property->title}}</a>
        </h4>
        <p class="demo2">{{$property->summery}}</p>
      </div>
    </div>
  </div>
  @endforeach
  
</div>
</div>
<!-- /.row -->


@endsection