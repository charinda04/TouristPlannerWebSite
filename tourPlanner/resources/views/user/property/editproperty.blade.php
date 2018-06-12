@extends('user/index')

@section('content')

<div class="container">
    <br>
    @foreach($properties as $property)
        <form role="form" method="POST" action="{{url('/user/editproperty/'.sprintf("%s",$property->id ))}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <br>

                        <h3>Property details</h3>
        <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Property Type</label>
                        <input id="title" type="text" class="form-control" name="type" value="{{ $property->type }}" required>
                    </div>
                </div> 

                <div class="col-md-6">
                        <div class="form-group">
                            <label>No of persons</label>
                            <input id="title" type="text" class="form-control" name="person" value="{{ $property->no_of_persons }}" required>
                        </div>
                    </div> 
            </div>

           

                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No of beds</label>
                                <input id="title" type="text" class="form-control" name="bed" value="{{ $property->no_of_beds }}" required>
                            </div>
                        </div> 

                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of bathrooms</label>
                                    <input id="title" type="text" class="form-control" name="bathroom" value="{{ $property->bathrooms }}" required>
                                </div>
                            </div> 
                    </div>

                    
                        <br>

                        <h3>Contact details</h3>

                        <br>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No</label>
                                        <input id="title" type="text" class="form-control" name="no" value="{{ $property->no }}" required>
                                    </div>
                                </div> 


                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Street/ Road</label>
                                            <input id="title" type="text" class="form-control" name="street" value="{{ $property->street }}" required>
                                        </div>
                                    </div> 
                            </div>
                          

                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input id="title" type="text" class="form-control" name="city" value="{{ $property->city }}" required>
                                            </div>
                                        </div> 


                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Contact No</label>
                                                    <input id="title" type="text" class="form-control" name="contact" value="{{ $property->contact_no }}" required>
                                                </div>
                                            </div> 
                                    </div>

                                   

                                        <br>

                                        <h3>Advertisement details</h3>
                
                                        <br>

                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Adverticement Name</label>
                                                        <input id="title" type="text" class="form-control" name="title" value="{{ $property->title }}" required>
                                                    </div>
                                                </div> 
                                            </div>
         
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Summary</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter Here" autocomplete="off"  required>{{ $property->summery }}</textarea>
                    </div>
                </div>

            </div>


            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Rent per day</label>
                            <input id="rent" type="text" class="form-control" name="rent" value="{{ $property->rent }}" required>
                        </div>
                    </div> 
                </div>

                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Current image</label>
                                <img class="img-fluid rounded" src="{{ asset('properties/'.sprintf("%s",$property->photo1 )) }}" alt="">  
                            </div>
                        </div>
                    </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image 1</label>
                            <input id="image1" type="file" class="form-control" name="image1" >
                        </div>
                    </div>
                </div>
            
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default">Cancel</button>
                </div>
            </div>

        
            </form>
            @endforeach
            <br>
</div>




@endsection