@extends('user/index')

@section('content')

<div class="container">

    <br>

    @foreach($property as $prop)












    <form role="form" method="POST" action="{{url('/user/paymentgateway')}}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        
        <br>

        <h3>User details</h3>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input id="email" type="text" class="form-control" name="type" >
                </div>
            </div> 
            

            <div class="col-md-6">
                <div class="form-group">
                    <label>Contact No</label>
                    <input id="contact" type="number" class="form-control" name="person" >
                </div>
            </div> 
        </div>

        
        

        
        
        <br>

        <h3>Date details</h3>

        <br>
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
        

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Check-In Time</label>
                    <input id="checkin" type="text" class="form-control" name="city" >
                </div>
            </div> 


            <div class="col-md-6">
                <div class="form-group">
                    <label>Check-Out Time</label>
                    <input id="checkout" type="text" class="form-control" name="contact" >
                </div>
            </div> 

            <div class="col-md-6">
                <div class="form-group">
                    
                    <input id="propid" type="hidden" class="form-control" name="contact" value="{{$prop->id}}">
                </div>
            </div> 

            <div class="col-md-6">
                <div class="form-group">
                    
                    <input id="rent" type="hidden" class="form-control" name="contact" value="{{$total}}">
                </div>
            </div> 

        </div>

        

        <br>

        <br>    

    <a href="{{ url('user/viewproperty/'.sprintf("%s",$prop->id )) }}" style="width:300px;font-family:courier;" name="submit" class="btn btn-info">Back</a>
    
    <button type="submit" class="btn btn-info" style="width:300px;font-family:courier;" name="submit">Pay Now</button>
</form>

<table class="table " 
{{-- style="font-family:courier;" --}}
>

<tbody><tr style="background-color:#ddd;">
    <th>Property Name</th>
    <th>Days</th>
    <th>Price</th>
    <th>Fee</th>
    <th>Sub Total</th>
</tr>

<tr>
    <td>{{ $prop->title }}</td>
    <td>{{ $days }}</td>
    <td>RS {{ $prop->rent }}</td>
    <td>3%</td>
    <td><b>RS {{ $total }}</b></td>
</tr>
@endforeach
<tr>
    <td colspan="5" style="background-color:#ddd;"></td>
</tr>

</tbody></table>
<br>

<br>

<br>
<br>










</div>

@endsection