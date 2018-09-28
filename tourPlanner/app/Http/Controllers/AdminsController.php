<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Admin;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __constructor(){
        
        $this->middleware('auth:admin');
    }

    public function index()
    {
        //
        return view('Admin.posts.allposts');
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


    public function request()
    {
        //
        $requests = DB::select('SELECT * FROM properties WHERE admin_permission LIKE  ?',[0]);
        return view('Admin.requests.allrequests', ['requests' => $requests]);

    }

    public function authenticate(Admin $admin,$id)
    {
        //
        $adminpermission = 1;
        $userPermission = 1;
        $property = DB::update('update properties set admin_permission=?, status=? where id=?', [$adminpermission, $userPermission, $id]);
        return redirect('admin/requests');
    }

    public function unauthenticate(Admin $admin,$id)
    {
        //
        $adminpermission = 0;
        $userPermission = 0;

        $property = DB::update('update properties set admin_permission=?, status=? where id=?', [$adminpermission, $userPermission,  $id]);
        return redirect('admin/requests');
    }



    public function authenticateproperty(Admin $admin,$id)
    {
        //
        $adminpermission = 1;
        $userPermission = 1;
        $property = DB::update('update properties set admin_permission=?, status=? where id=?', [$adminpermission, $userPermission, $id]);
        return redirect('admin/properties');
    }

    public function unauthenticateproperty(Admin $admin,$id)
    {
        //
        $adminpermission = 0;
        $userPermission = 0;

        $property = DB::update('update properties set admin_permission=?, status=? where id=?', [$adminpermission, $userPermission,  $id]);
        return redirect('admin/properties');
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

    public function viewbookings(Request $request)
    {
        //
        $bookings = DB::select('SELECT * FROM bookings');

        return view('Admin.bookings.allbookings', ['bookings' => $bookings]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function showProperties(Admin $admin)
    {
        //
        $properties = DB::select('SELECT * FROM properties');

        return view('Admin.property.allproperties', ['properties' => $properties]);

    }

    public function monthlyReport(Admin $admin)
    {
        //
        $properties = DB::select('SELECT * FROM properties');


        return view('Admin.reports.monthlyreport', [
            'properties' => $properties,
            'label' => serialize($this->getLables()),
            'data' => serialize($this->getData())
        ]);

    }

    private function getLables()
    {
        //
        $bookings = DB::select('SELECT * FROM bookings');

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
        $bookings = DB::select('SELECT * FROM bookings');

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
                $jan += $o->rent; 
            }
            if ($month == 02){
                $feb += $o->rent; 
            }
            if ($month == 03){
                $mar += $o->rent; 
            }
            if ($month == 04){
                $apr += $o->rent; 
            }
            if ($month == 05){
                $may += $o->rent; 
            }
            if ($month == 06){
                $jun += $o->rent; 
            }
            if ($month == 07){
                $jul += $o->rent; 
            }
            if ($month == '08'){
                $aug += $o->rent; 
            }
            if ($month == '09'){
                $sep += $o->rent; 
            }
            if ($month == 10){
                $oct += $o->rent; 
            }
            if ($month == 11){
                $nov += $o->rent; 
            }
            if($month == 12){
                $dec += $o->rent;
            }
            // array_push($a,$o->rank);
        }

        $a = [ $jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov , $dec];

        return $a;

    }



    public function yearlyReport(Admin $admin)
    {
        //
        $properties = DB::select('SELECT * FROM properties');

        return view('Admin.reports.yearlyreport', ['properties' => $properties]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin,$id)
    {
        //
        $posts = DB::delete('delete from properties where id=?',[$id]);
        return redirect('admin/properties');
    }
}
