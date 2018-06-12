<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Auth;
use App\user;
use Illuminate\Http\Request;

class UserPlacesController extends Controller
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
        $places = DB::table('places')->get();
        
            
      
            return view('user.home', ['places' => $places]);
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
    public function store(Request $request,user $user,$id)
    {
        //
        $place_id = $id;
         $user_id = Auth::user()->id;
        $comment = $request->get('comment');
        $created_at = Carbon::now();


        $posts = DB::insert('insert into comment_place (place_id, user_id, comment, created_at) values (?, ?, ?,?)', [$place_id, $user_id, $comment,$created_at]);
        if($posts){
            return redirect(url('user/viewlocation/'.sprintf("%s",$place_id)));
        }else{
            return view('Admin.posts.addnewpost');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user, $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }

    public function view($id)
    {
        //
        $places = DB::table('places')->get()->where('id',$id);
        $comments = DB::table('comment_place')
            ->join('users', 'comment_place.user_id', '=', 'users.id' )
            ->select('comment_place.*', 'users.name')
            ->get()
            ->where('place_id',$id);


        return view('user.location.viewlocation',['places' => $places,'comments' =>$comments]);
    }
}
