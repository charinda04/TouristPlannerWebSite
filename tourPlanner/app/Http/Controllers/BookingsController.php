<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = Auth::user()->id;

        $bookings = DB::select('SELECT * FROM bookings WHERE user_id=?',[$user_id]);

        return view('user.booking.allbookings', ['bookings' => $bookings]);

    }


    public function confirmBooking( $id, Request $request)
    {
        //

        $property = DB::select('SELECT * FROM properties WHERE id=?',[$id]);
        // $days = $request->post('days');
        $days = $request->get('days');
        $total = 0;

        foreach($property as $prop){
            $total = (($prop->rent) * 103/100 * $days) ;
        }

       

        return view('user.booking.confirmbooking',[
            'days' => $days,
            'property' => $property,
            'total' => $total
        ]);

    }

    public function paymentgateway(Request $request)
    {
        //

        // $place_id = $id;
        $user_id = Auth::user()->id;
       $email = $request->get('email');
       $contact = $request->get('contact');
       $date = $request->get('date');
       $checkin = $request->get('checkin');
       $checkout = $request->get('checkout');
       $propid = $request->get('propid');
       $rent = $request->get('rent');
       $created_at = Carbon::now();


    //    $posts = DB::insert('insert into bookings (email, contact_no, date, checkin_time, checkout_time, rent, property_id,user_id, created_at) values (?, ?, ?,?,?,?,?,?,?)',
    //     [$email, $contact, $date,$checkin,$checkout,$rent,$propid,$user_id,$created_at]);





        return view('user.booking.paymentgateway');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }



    public function income()
    {
        //
        $user_id = Auth::user()->id;
        $properties = DB::select('SELECT * FROM properties WHERE user_id=?',[$user_id]);


        return view('user.booking.monthlyreport', [
            'properties' => $properties,
            'label' => serialize($this->getLables()),
            'data' => serialize($this->getData())
        ]);

    }



    private function getLables()
    {
        //
        $user_id = Auth::user()->id;
        $bookings = DB::select('SELECT * FROM bookings WHERE user_id=?',[$user_id]);

        $a=['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        // foreach ($bookings as $o){
        //     $datefull = $o->date;
        //     $year = substr($datefull,0,4);
        //     $month = substr($datefull,0,4);
        //     $day = substr($datefull,0,4);

        //     array_push($a,$o->rank);
        // }
        return $a;

        return view('Admin.reports.monthlyreport', ['properties' => $properties]);

    }

    private function getData()
    {
        //
        $user_id = Auth::user()->id;
        $bookings = DB::select('SELECT * FROM bookings WHERE user_id=?',[$user_id]);

        $jan = 0;
        $feb=0;
        $mar=0;
        $apr=0;
        $may=0;
        $jun=0;
        $jul=0;
        $aug=0;
        $sep=0;
        $oct=0;
        $nov=0;
        $dec=0;


        foreach ($bookings as $o){
            $datefull = $o->date;
            $year = substr($datefull,0,4);
            $month = substr($datefull,5,2);
            $day = substr($datefull,8,9);

            if($month == 01){
                $jan += ($o->rent); 
            }
            if ($month == 02){
                $feb += ($o->rent); 
            }
            if ($month == 03){
                $mar += ($o->rent); 
            }
            if ($month == 04){
                $apr += ($o->rent); 
            }
            if ($month == 05){
                $may += ($o->rent); 
            }
            if ($month == 06){
                $jun += ($o->rent); 
            }
            if ($month == 07){
                $jul += ($o->rent); 
            }
            if ($month == '08'){
                $aug += ($o->rent); 
            }
            if ($month == '09'){
                $sep += ($o->rent); 
            }
            if ($month == 10){
                $oct += ($o->rent); 
            }
            if ($month == 11){
                $nov += ($o->rent); 
            }
            if($month == 12){
                $dec += ($o->rent);
            }
            // array_push($a,$o->rank);
        }

        $a = [ $jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov , $dec];

        return $a;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
