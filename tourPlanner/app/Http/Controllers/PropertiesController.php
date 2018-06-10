<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
         $this->middleware('user');
    }

    public function index()
    {
        //
        return view('user.property.addproperty');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $type = $request->get('type');
        $person = $request->get('person');
        $bed = $request->get('bed');
        $bathroom = $request->get('bathroom');
        $no = $request->get('no');
        $street= $request->get('street');
        $city= $request->get('city');
        $contact= $request->get('contact');
        $title= $request->get('title');
        $summary= $request->get('description');


        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $file->move('properties', $file->getClientOriginalName());
            $fileName = $file->getClientOriginalName();
        }

        //$created_at = Carbon::now();
        //$posts = DB::insert('insert into places (title, description, tags, created_at) values (?, ?, ?, ?)', [$title, $description, $tags, $created_at]);
        $posts = DB::insert('insert into properties (type, no_of_persons, no_of_beds,bathrooms,no,street,city,photo1,summery,title,contact_no) values (?, ?, ?,?,?,?,?,?,?,?,?)', 
        [$type, $person, $bed,$bathroom,$no,$street,$city,$fileName,$summary,$title, $contact]);
        if($posts){
            return redirect('admin/');
        }else{
            return view('Admin.posts.addnewpost');
        }
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
