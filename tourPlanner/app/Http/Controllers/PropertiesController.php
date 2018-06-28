<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

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

    public function index(Request $request)
    {
        //

        return view('user.property.addproperty',['request'=>$request]);
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
        $user_id = Auth::user()->id;
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
        $rent= $request->get('rent');
        $created_at = Carbon::now();


        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $fileName = $file->getClientOriginalName();
            $fileName = time().$fileName;
            $file->move('properties', $fileName);
            
        }

        //$created_at = Carbon::now();
        //$posts = DB::insert('insert into places (title, description, tags, created_at) values (?, ?, ?, ?)', [$title, $description, $tags, $created_at]);
        $posts = DB::insert('insert into properties (type, no_of_persons, no_of_beds,bathrooms,no,street,city,photo1,summery,title,contact_no, created_at,user_id,rent ) values (?, ?, ?,?,?,?,?,?,?,?,?,?,?,?)', 
        [$type, $person, $bed,$bathroom,$no,$street,$city,$fileName,$summary,$title, $contact, $created_at,$user_id,$rent]);
        if($posts){
            return redirect('user/properties');
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
    public function show()
    {
        //
        $id = Auth::user()->id;
        $properties = DB::table('properties')->get()->where('user_id',$id);
        return view('user.property.allproperties', ['properties' => $properties]);
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
        $properties = DB::table('properties')->get()->where('id',$id);
        return view('user.property.editproperty',['properties' => $properties]);
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
        $rent= $request->get('rent');

        if($request->hasFile('image1')){
            $file = $request->file('image1');
            $fileName = $file->getClientOriginalName();
            $fileName = time().$fileName;
            $file->move('properties', $fileName);

            $posts = DB::update('update properties set type=?, no_of_persons=?, no_of_beds=?, bathrooms=?, no=?, street=?, city=?, summery=?, title=?, contact_no=?, rent=?, photo1=? where id=?', 
            [$type, $person, $bed, $bathroom, $no, $street, $city, $summary, $title, $contact, $rent, $fileName, $id]);
            
        }else{
            $posts = DB::update('update properties set type=?, no_of_persons=?, no_of_beds=?, bathrooms=?, no=?, street=?, city=?, summery=?, title=?, contact_no=?, rent=? where id=?', 
            [$type, $person, $bed, $bathroom, $no, $street, $city, $summary, $title, $contact, $rent, $id]);
        }

        

        

        if($posts){
            return redirect('user/properties');
        }else{
            return view('Admin.posts.editpost');
        }

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
        $posts = DB::delete('delete from properties where id=?',[$id]);
        return redirect('user/properties');
    }

    public function view($id)
    {
        //

        $properties = DB::table('properties')->get()->where('id',$id);
        $comments = DB::table('comment_property')
            ->join('users', 'comment_property.user_id', '=', 'users.id' )
            ->select('comment_property.*', 'users.name')
            ->get()
            ->where('property_id',$id);
        return view('user.property.viewproperty',['properties' => $properties, 'comments' =>$comments]);
    }

    public function propertySearch(Request $request)
    {
        $city = $request->get('city');
        $properties = DB::table('properties')
        ->where('city', 'like','%'.$city.'%')
        ->get();
        
        return view('user.property.searchproperty',['properties' => $properties]);
    }
}
