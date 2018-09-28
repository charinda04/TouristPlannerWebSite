@extends('user/index')

@section('content')

<div class="container">




<br>
<br>
<br>
        <div class="theCard">
                <figure class="theCardFront">
                  <div class="instructionsCards">
                      <div class="variousCards">
                              <img class="visa cardImg" src="{{ asset('properties/mastercard.jpg') }}" style="height:30px;width:50px;">
          
                          
                      </div>
                  </div>
                    {{-- <div class="instructions">
                      <a href="#" class="signIn">Sign in</a>
                  </div> --}}
                  <br class="clear">
                  <div class="cardNumber">Card Number:<br>
                      <input class="firstfour" placeholder="1111" maxlength="4">
                      <input placeholder="2222" maxlength="4">
                      <input placeholder="3333" maxlength="4" autocomplete="off">
                      <input placeholder="4444" maxlength="4">
                  </div>
                  <div class="cardExpiration">Expiration Date:<br>
                      <input class="month" placeholder="Mo" maxlength="2"> / <input class="year" placeholder="Year" maxlength="4">
                  </div>
                  <div class="cardSecurity">Security Code:<br>
                      <input class="csc" placeholder="CSC" maxlength="4">
                      <small>
                          <span class="tooltip">
                          What's this?
                        </span>
                        <span class="help">
                            Lorem ipsum dolor sit ame
                        </span>
                    </small>
                  </div>
                  <br class="clear">
                <a href="{{ url('user/bookings') }}" type="submit" name="submit" class="pay">Pay Now</a>

                  {{-- <input type="submit" value="Pay Now" class="pay"> --}}
                </figure>
                
              </div>




              <br><br><br><br><br><br>
              <br><br><br><br><br><br>
              <br>




    </div>

    @endsection