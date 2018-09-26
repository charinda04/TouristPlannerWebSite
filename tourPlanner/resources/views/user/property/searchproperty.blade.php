@extends('user/index')

@section('content')

<br>
<div class="container-fluid">
<div class="row">
  
  
  <div class="col-lg-12 mb-5">
    <div class="card h-100">
      <h4 class="card-header">Create Tour Planner</h4>
      <div class="card-body">
          <form role="form" method="POST" action="{{url('/user/searchproperty')}}">
            {{ csrf_field() }}
        
            <div class="row">
                        <div class="col-md-4">
                        <label>City</label>
                      </div>
                      <div class="col-md-8">
                      <input id="city" type="text" class="form-control" name="city" value={{$city}} >
                    </div>
            </div>
            
    <br>
    <div class="row">
        <div class="col-md-4">
        <label>No of people</label>
      </div>
      <div class="col-md-8">
      <input id="no_people" type="text" class="form-control" name="no_people" value={{$no_people}} required>
    </div>
</div>
         <br>
        <div class="row">
          
                  <!-- Date range -->

                      <div class="col-md-4">
                    <label>Date range:</label>
                  </div>
                  <div class="col-md-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control float-right" id="reservation" value={{$reservation}}>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
      </div>      
            <div class="row">
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                 
                </div>
            </div>
        
            </form>
      </div>
      
    </div>
  </div>


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