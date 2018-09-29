@extends('user/index')

@section('content')


<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      
      {{--            
        <div class="card1 align-top" style="width: 200;" >
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        
        <div class="card" style="width: 200; height: 10;" >
          <div class="card-body">
            
           
            
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>  --}}
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
        
        
      </ol>
      
      
      
      
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
          <img class="d-block w-100" src="{{ asset('carousel/1.jpg') }}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            {{-- <h3>First Slide</h3>
              <p>This is a description for the first slide.</p> --}}
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <img class="d-block w-100" src="{{ asset('carousel/2.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              {{-- <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p> --}}
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <img class="d-block w-100" src="{{ asset('carousel/3.jpg') }}" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                {{-- <h3>Third Slide</h3>
                  <p>This is a description for the third slide.</p> --}}
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            
          </div>
        </header>
        
        <!-- Page Content -->
        <div class="container">
          
          <h1 class="my-4">The new way to plan your next trip</h1>
          
          <!-- Marketing Icons Section -->
          <div class="row">
            <div class="col-lg-5 mb-5">
              <div class="card h-100">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#menu1">Search  Accomodation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#home">Rent your property</a>
                  </li>
                  
                  
                </ul>
                
                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="menu1" class="container tab-pane active"><br>
                    <form role="form" method="POST" action="{{url('/user/searchproperty')}}">
                      {{ csrf_field() }}
                      
                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label>City</label>
                            <div class="autocomplete">
                              <input id="city" type="text" id="searchPlace" placeholder="Enter a place to search" class="form-control" name="city" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        
                       
                        

                        <!-- Date range -->

                        <div class="col-md-10">
                          <div class="form-group">
                            <label>Date range:</label>
                            
                            
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa fa-calendar"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control float-right" id="reservation">
                            </div>
                            <!-- /.input group -->
                            
                            <!-- /.form group -->
                          </div>

                          
                        </div>
                        
                      </div>
                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label>No of People</label>
                            <input id="no_people" type="text" class="form-control" name="no_people" required>
                          </div>
                        </div>
                      </div>
                      
                      
                      
                      
                      <div class="row">
                        <div class="col-md-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          
                        </div>
                      </div>
                      
                    </form>
                  </div>


                  <div id="home" class="container tab-pane fade"><br>
                    <form role="form" method="POST" action="{{url('/user/rentplace')}}">
                      {{ csrf_field() }}
                      
                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label>City</label>
                            <input id="city" type="text" class="form-control" name="city" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label>No of People</label>
                            <input id="no_people" type="text" class="form-control" name="no_people" required>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  
                  <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Menu 2</h3>
                    {{--  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>  --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2 mb-2">
              
            </div>
            <div class="col-lg-5 mb-5">
              <div class="card h-100">
                <h4 class="card-header">Create Tour Planner</h4>
                <div class="card-body">
                  <form role="form" method="POST" action="{{url('/user/tourplannerlist')}}">
                    {{ csrf_field() }}
                    
                    <div class="row">
                      <div class="col-md-4">
                        <label>Start City</label>
                      </div>
                      <div class="col-md-8">
                        <input id="start" type="text" class="form-control" name="title" >
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <label>Destination</label>
                      </div>
                      <div class="col-md-8">
                        <input id="end" type="text" class="form-control" name="title" >
                      </div>
                    </div>

                    <br>
                    {{-- <div class="row">
                      <div class="col-md-4">
                        <label>No of people</label>
                      </div>
                      <div class="col-md-8">
                        <input id="title" type="text" class="form-control" name="title" required>
                      </div>
                    </div>
                    <br> --}}
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
                          <input type="text" class="form-control float-right" id="reservation">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                      
                      
                      
                      
                    </div>
                    
                    
                    <br>
                    
                    <div class="row">
                      <div class="col-md-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                      </div>
                    </div>
                    
                  </form>
                </div>
                
              </div>
            </div>
          </div>
          <!-- /.row -->

          <hr><br>
          <form autocomplete="off" method="POST" action="{{url('/user/search_result')}}">
            {{ csrf_field() }}
            
            <div class="input-group input-group-sm">
              <div class="autocomplete input-group input-group-sm">
                <input type="text" id="searchPlace" name="place" placeholder="Enter a place to search" class="form-control">
                <span class="input-group-append">
                  <button type="submit" class="btn btn-info btn-flat">Search!</button>
                </span>
              </div>
            </div>
          </form>
          <br>
          <hr>
          
          <!-- Portfolio Section -->
          <br>
          <h2>Most beautiful places to see in Sri Lanka</h2>
          <br>


          <div class="row">
            @foreach($places as $key => $place)
            <div class="col-lg-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <a href="{{ url('user/viewlocation/'.sprintf("%s",$place->id ))}}"><img class="card-img-top" src="{{ asset('locations/'.sprintf("%s",$place->photo1 )) }}" alt=""></a>
                {{--  700x400  --}}
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
          <!-- /.row -->
          
          <!-- Features Section -->
          {{--  <div class="row">
            <div class="col-lg-6">
              <h2>Modern Business Features</h2>
              <p>The Modern Business template by Start Bootstrap includes:</p>
              <ul>
                <li>
                  <strong>Bootstrap v4</strong>
                </li>
                <li>jQuery</li>
                <li>Font Awesome</li>
                <li>Working contact form with validation</li>
                <li>Unstyled page elements for easy customization</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-lg-6">
              <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
            </div>
          </div>  --}}
          <!-- /.row -->
          
          <hr>
          
          <!-- Call to Action Section -->
          {{--  <div class="row mb-4">
            <div class="col-md-8">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
              <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
            </div>
          </div>  --}}
          
        </div>
        <!-- /.container -->
        
        
        
        @endsection