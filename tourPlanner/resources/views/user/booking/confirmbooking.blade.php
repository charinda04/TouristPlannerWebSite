@extends('user/index')

@section('content')

<div class="container">

    <br>


    



    <br>



        <form autocomplete="off" method="POST" action="{{url('/user/paymentgateway')}}">
                {{ csrf_field() }}
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












    </div>

    @endsection