@extends('user/index')

@section('content')

<div class="container">

    <br>


    <form role="form" method="POST" action="{{url('/user/paymentgateway')}}" enctype="multipart/form-data" autocomplete="off">
        {{ csrf_field() }}

        <br>

                    <h3>User details</h3>
    <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input id="title" type="text" class="form-control" name="type" >
                </div>
            </div> 

            <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact No</label>
                        <input id="title" type="number" class="form-control" name="person" >
                    </div>
                </div> 
        </div>

       

        
                
                    <br>

                    <h3>Date details</h3>

                    <br>
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input id="title" type="text" class="form-control" name="no" >
                                </div>
                            </div> 


                             
                        </div>
                      

                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Check-In Time</label>
                                            <input id="title" type="text" class="form-control" name="city" >
                                        </div>
                                    </div> 


                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Check-Out Time</label>
                                                <input id="title" type="text" class="form-control" name="contact" >
                                            </div>
                                        </div> 
                                </div>

                               

                                    <br>

                                 
        

        

    
    




    <br>



        
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
                            <td>992958Accer Aspire E 15</td>
                            <td>1</td>
                            <td>RS125000</td>
                            <td>3%</td>
                            <td><b>RS125000</b></td>
                        </tr>
                                            <tr>
                        <td colspan="5" style="background-color:#ddd;"></td>
                    </tr>

                </tbody></table>
                <br>

            

                <a href="{{ url('user/properties') }}" style="width:300px;font-family:courier;" name="submit" class="btn btn-info">Back</a>
                
                <button type="submit" class="btn btn-info" style="width:300px;font-family:courier;" name="submit">Pay Now</button>
            </form>



<br>

<br>
<br>










    </div>

    @endsection