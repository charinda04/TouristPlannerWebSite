<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();



Route::get('/admin', 'AdminsController@index');

// Route::get('/admin', function () {
//     return view('Admin.posts.allposts');
// });

Route::get('/admin/addnewpost', function () {
    return view('Admin.posts.addnewpost');
});

Route::get('/admin', function () {
    
});
Route::get('/', 'PlacesController@index')->name('home');

Route::group(['middleware' => ['web','auth']], function(){

    
    
    Route::get('/home', function(){
        if(Auth::user()->admin == 0){
            return view('home');
        }else{
           // return view('Admin.posts.allposts');
           return ('PlacesController@index(Auth::user()->admin)');
        }
    });
});