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

        $start = "ELL";
        $end = "MIRISSA";

        $startCordinates = DB::select('SELECT * FROM places_towns WHERE name LIKE  ?',['%'.$start.'%']);
        $endCordinates = DB::select('SELECT * FROM places_towns WHERE name LIKE  ?',['%'.$end.'%']);

        // $startCordinates = DB::table('places_towns')->get()->where('name', 'like', '{%'.$start.'%}');
        // $endCordinates = DB::table('places_towns')->get()->where('name',$end);


        // $endCordinates = DB::table('places_towns')
        // ->select('*')
        // ->where('name', 'like','%'.$end.'%')
        // ->get();



        $startCordinatesLat = 0;
        $startCordinatesLon = 0;
        $endCordinatesLat = 0;
        $endCordinatesLon = 0;

        foreach($startCordinates as $cordinate){
            $startCordinatesLat = $cordinate->latitude;
            $startCordinatesLon = $cordinate->longitude;

        }

        foreach($endCordinates as $cordinate){
            $endCordinatesLat = $cordinate->latitude;
            $endCordinatesLon = $cordinate->longitude;

        }

        $midLat = ($startCordinatesLat + $endCordinatesLat)/2;
        $midLon = ($startCordinatesLon + $endCordinatesLon)/2;

        $radius = sqrt(pow(abs($startCordinatesLat - $midLat),2) + pow(abs($startCordinatesLon - $midLon),2));


        $placeList = array();

        $allPlaces = DB::select('SELECT * FROM places_towns');
        
        foreach($allPlaces as $place){
            $placeLat = $place->latitude;
            $placeLon = $place->longitude;

            $placeRadius = sqrt(pow(abs($placeLat - $midLat),2) + pow(abs($placeLon - $midLon),2));

            if($radius > $placeRadius){
                $placeList[] = $place;
            }
        }

        $plannerList = array();
        $plannerListSorted = array();

        foreach($placeList as $place){
            $placeLat = $place->latitude;
            $placeLon = $place->longitude;

            $distanceFromStart = sqrt(pow(abs($placeLat - $startCordinatesLat),2) + pow(abs($placeLon - $startCordinatesLon),2));

            $object = new stdClass();
            $object->place = $place;
            $object->diatance = $distanceFromStart;
             
            $plannerList[] = $object;
        }

        






        // echo "<script>alert(".$start.")</script>";
        // $x = implode("|",$startCordinates);

        $rows = array();

        foreach($startCordinates as $r){
            $rows[] = $r;
        }
        echo json_encode($placeList);

        // echo "test";
        // echo "$radius";
        // echo "$midLon";


        // echo "<script>alert(".$startCordinates.")</script>";

        return view('user.tourplan.tourplanlist');

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
