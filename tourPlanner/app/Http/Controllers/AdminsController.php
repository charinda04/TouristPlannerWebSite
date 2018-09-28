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
