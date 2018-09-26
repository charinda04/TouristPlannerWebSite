<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Auth;
use App\user;


class TourplansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // $start = $request->post('start');
        // $end = $request->post('end');

        $start = "ELLA";
        $end = "MIRISSA";

        // $startCordinates = DB::table('places_towns')
        // ->select('name')
        // ->get()
        // ->where('name', 'like','%'.$start.'%');

        $startCordinates = DB::select('SELECT * FROM places_towns WHERE name = '.$start.'');

        $endCordinates = DB::table('places_towns')
        ->select('*')
        ->get()
        ->where('name', 'like','%'.$end.'%');



        $startCordinatesLat = 0;
        $startCordinatesLon = 0;
        $endCordinatesLat = 0;
        $endCordinatesLon = 0;

        foreach($startCordinates as $cordinate){
            $startCordinatesLat = $cordinate->latitude;
            $startCordinatesLon = $cordinate->longitude;

        }


        echo "<script>alert(".$start.")</script>";

        echo "test";
        echo "$startCordinates";

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
