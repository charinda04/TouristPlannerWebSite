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



//Route::get('/admin', 'AdminsController@index');

// Route::get('/admin', function () {
//     return view('Admin.posts.allposts');
// });

// Route::get('/admin/addnewpost', function () {
//     return view('Admin.posts.addnewpost');
// });


Route::get('/', 'UserPlacesController@index')->name('home');




Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'AdminPlacesController@index');
    Route::get('/home', 'Commission\HomeController@index');
    Route::get('/viewpost/{id}', 'AdminPlacesController@show');
    Route::get('/editpost/{id}', 'AdminPlacesController@edit');
    Route::get('/addnewpost', 'AdminPlacesController@addNew');
    Route::post('/addnewpost', 'AdminPlacesController@store');
    Route::post('/editpost/{id}', 'AdminPlacesController@update');
    Route::post('/deletepost/{id}', 'AdminPlacesController@destroy');

   

});

Route::group(['prefix' => 'user'], function () {

    Route::get('/', 'UserPlacesController@index');
    
    Route::get('/properties', 'PropertiesController@show');
    Route::get('/viewproperty/{id}', 'PropertiesController@view');
    Route::get('/editproperty/{id}', 'PropertiesController@edit');
   
    Route::post('/rentplace', 'PropertiesController@index');
    Route::post('/addrentplace', 'PropertiesController@store');
    Route::post('/editproperty/{id}', 'PropertiesController@update');
    Route::post('/deleteproperty/{id}', 'PropertiesController@destroy');
});