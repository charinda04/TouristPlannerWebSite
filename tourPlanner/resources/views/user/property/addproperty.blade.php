@extends('user/index')

@section('content')

<div class="container">
    <br>

        <form role="form" method="POST" action="{{url('/user/addrentplace')}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <br>

                        <h3>Property details</h3>
        <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Property Type</label>
                        <input id="title" type="text" class="form-control" name="type" required>
                    </div>
                </div> 

                <div class="col-md-6">
                        <div class="form-group">
                            <label>No of persons</label>
                            <input id="title" type="text" class="form-control" name="person" value="{{ $request->no_people }}" required>
                        </div>
                    </div> 
            </div>

           

                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No of beds</label>
                                <input id="title" type="text" class="form-control" name="bed" required>
                            </div>
                        </div> 

                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of bathrooms</label>
                                    <input id="title" type="text" class="form-control" name="bathroom" required>
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
                                        <input id="title" type="text" class="form-control" name="no" required>
                                    </div>
                                </div> 


                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Street/ Road</label>
                                            <input id="title" type="text" class="form-control" name="street" required>
                                        </div>
                                    </div> 
                            </div>
                          

                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input id="title" type="text" class="form-control" name="city" value="{{ $request->city }}" required>
                                            </div>
                                        </div> 


                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Contact No</label>
                                                    <input id="title" type="text" class="form-control" name="contact" required>
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
                                                        <input id="title" type="text" class="form-control" name="title" required>
                                                    </div>
                                                </div> 
                                            </div>
         
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Summary</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter Here" autocomplete="off"  required></textarea>
                    </div>
                </div>
                
            </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Rent per day : Rs</label>
                            <input id="rent" type="text" class="form-control" name="rent" required>
                        </div>
                    </div> 
                </div>

            
            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image 1</label>
                            <input id="image1" type="file" class="form-control" name="image1" required>
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
            <br>
</div>

@endsection