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
              <div class="carousel-caption d-none d-md-block">
                <h3>First Slide</h3>
                <p>This is a description for the first slide.</p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Third Slide</h3>
                <p>This is a description for the third slide.</p>
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
  
        <h1 class="my-4">Welcome to Modern Business user</h1>
  
        <!-- Marketing Icons Section -->
        <div class="row">
          <div class="col-lg-5 mb-5">
            <div class="card h-100">
                <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Rent your property</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Search  Accomodation</a>
      </li>
      
    </ul>
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="home" class="container tab-pane active"><br>
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
      <div id="menu1" class="container tab-pane fade"><br>
        <form role="form" method="POST" action="{{url('/admin/addnewpost')}}">
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
                      <label>Check in date</label>
                      <input id="no_people" type="text" class="form-control" name="no_people" required>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-10">
                  <div class="form-group">
                      <label>Check out date</label>
                      <input id="no_people" type="text" class="form-control" name="no_people" required>
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
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
    </div>
            </div>
          </div>
          <div class="col-lg-2 mb-2">
            {{--  <div class="card h-100">
              <h4 class="card-header">Card Title</h4>
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>  --}}
          </div>
          <div class="col-lg-5 mb-5">
            <div class="card h-100">
              <h4 class="card-header">Card Title</h4>
              <div class="card-body">
                  <form role="form" method="POST" action="{{url('/admin/addnewpost')}}">
                    {{ csrf_field() }}
                
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Title</label>
                                <input id="title" type="text" class="form-control" name="title" required>
                            </div>
                        </div>
                        
                    </div>
                 
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Enter Here" autocomplete="off"  required></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <button type="button" class="btn btn-default">Add Photo 1</button><button type="button" class="btn btn-default">Add Photo 2</button>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Tags</label>
                                <textarea name="tags" class="form-control" rows="3" placeholder="Enter Here" autocomplete="off"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                
                    </form>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
  
        <!-- Portfolio Section -->
        <h2>Portfolio Heading</h2>
  
        <div class="row">
          @foreach($places as $key => $place)
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="{{ asset('locations/'.sprintf("%s",$place->photo1 )) }}" alt=""></a>
              {{--  700x400  --}}
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$place->title}}</a>
                </h4>
                <p class="card-text">{{$place->description}}</p>
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