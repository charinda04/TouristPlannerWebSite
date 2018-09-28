<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Place;
use Carbon\Carbon;
use Auth;

use App\Admin;
use Illuminate\Http\Request;

class AdminPlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }

    
    public function index()
    {
        //

        $places = DB::table('places')->get();
        return view('Admin.posts.allposts', ['places' => $places]);
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
        //$place = new Place();


        $title = $request->get('title');
        $description = $request->get('description');
        $tags = $request->get('tags');
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');


        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $fileName = $file->getClientOriginalName();
            $fileName = time().$fileName;
            $file->move('locations', $fileName);
            
        }

        $created_at = Carbon::now();
        //$posts = DB::insert('insert into places (title, description, tags, created_at) values (?, ?, ?, ?)', [$title, $description, $tags, $created_at]);
        $posts = DB::insert('insert into places (title, description, tags,photo1, created_at, latitude, longitude) values (?, ?, ?,?,?,?,?)', [$title, $description, $tags,$fileName,$created_at,$latitude,$longitude]);

        // $placeCordinate = DB::insert('insert into places_towns (name, latitude, longitude) values (?, ?, ?)', [$title, $latitude, $longitude]);
        if($posts){
            return redirect('admin/');
        }else{
            return view('Admin.posts.addnewpost');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin,$id)
    {
        //
        //$id = $request->id;
        $places = DB::table('places')->get()->where('id',$id);

        $comments = DB::table('comment_place')
        ->join('users', 'comment_place.user_id', '=', 'users.id' )
        ->select('comment_place.*', 'users.name')
        ->get()
        ->where('place_id',$id);
        //$places = DB::select('select * from places where id=?',[$id]);
        //if($places){
            return view('Admin.posts.viewpost',['places' => $places,'comments' => $comments]);
       // }
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin,$id)
    {
        //
        $places = DB::table('places')->get()->where('id',$id);

        return view('Admin.posts.editpost',['places' => $places]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin,$id)
    {
        //
        $title = $request->get('title');
        $description = $request->get('description');
        $tags = $request->get('tags');
        $latitude = $request->get('latitude');
        $longitude = $request->get('longitude');

        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $fileName = $file->getClientOriginalName();
            $fileName = time().$fileName;
            $file->move('locations', $fileName);
            
            $posts = DB::update('update places set title=?, description=?, tags=?, latitude=?, longitude=?, photo1=? where id=?', [$title, $description, $tags, $latitude, $longitude, $fileName, $id]);
        }else{
            $posts = DB::update('update places set title=?, description=?, tags=?, latitude=?, longitude=? where id=?', [$title, $description, $tags, $latitude, $longitude, $id]);
        }



        
        if($posts){
            return redirect('admin/');
        }else{
            return view('Admin.posts.editpost');
        }

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
        $posts = DB::delete('delete from places where id=?',[$id]);
        return redirect('admin/');
    }

    public function addNew()
    {
        //
        return view('Admin.posts.addnewpost');
    }


    public function addComment(Request $request, $id)
    {
        //
        $place_id = $id;
        $user_id = Auth::user()->id;
       $comment = $request->get('comment');
       $created_at = Carbon::now();


       $posts = DB::insert('insert into comment_place (place_id, user_id, comment, created_at) values (?, ?, ?,?)', [$place_id, $user_id, $comment,$created_at]);
       if($posts){
           return redirect(url('admin/viewpost/'.sprintf("%s",$place_id)));
       }else{
           return view('Admin.posts.addnewpost');
       }
    }
}
