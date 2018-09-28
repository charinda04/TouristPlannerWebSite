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


Route::get('/', 'GuestController@index')->name('home');




Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'AdminPlacesController@index');
    Route::get('/home', 'Commission\HomeController@index');
    Route::get('/viewpost/{id}', 'AdminPlacesController@show');
    Route::get('/editpost/{id}', 'AdminPlacesController@edit');
    Route::get('/addnewpost', 'AdminPlacesController@addNew');
    Route::get('/requests', 'AdminsController@request');
    Route::get('/propertyauth/{id}', 'AdminsController@authenticate');
    Route::get('/propertyunauth/{id}', 'AdminsController@unauthenticate');
    Route::get('/properties', 'AdminsController@showproperties');
    Route::get('/propertyauthenticate/{id}', 'AdminsController@authenticateproperty');
    Route::get('/propertyunauthenticate/{id}', 'AdminsController@unauthenticateproperty');
    Route::get('/propertydelete/{id}', 'AdminsController@destroy');

    
    Route::post('/addnewpost', 'AdminPlacesController@store');
    Route::post('/editpost/{id}', 'AdminPlacesController@update');
    Route::post('/deletepost/{id}', 'AdminPlacesController@destroy');
    Route::post('/locationcomment/{id}', 'AdminPlacesController@addcomment');
    
});

Route::group(['prefix' => 'user'], function () {

    Route::get('/', 'UserPlacesController@index');
    Route::get('/viewlocation/{id}', 'UserPlacesController@view');
    Route::get('/rentplace', 'PropertiesController@index');
    Route::get('/properties', 'PropertiesController@show');
    Route::get('/publishproperty/{id}', 'PropertiesController@publish');
    Route::get('/unpublishproperty/{id}', 'PropertiesController@unpublish');
    Route::get('/viewproperty/{id}', 'PropertiesController@view');
    Route::get('/editproperty/{id}', 'PropertiesController@edit');
    Route::get('/bookings', 'BookingsController@index');

    Route::get('/mapview', function () {
        return view('user.tourplan.tourplanmap');
    });

   
    Route::post('/rentplace', 'PropertiesController@index');
    Route::post('/addrentplace', 'PropertiesController@store');
    Route::post('/editproperty/{id}', 'PropertiesController@update');
    Route::post('/deleteproperty/{id}', 'PropertiesController@destroy');
    Route::post('/locationcomment/{id}', 'UserPlacesController@store');
    Route::post('/propertycomment/{id}', 'UserPropertiesController@store');
    Route::post('/searchproperty', 'PropertiesController@propertySearch');
    Route::post('/search_result', 'PropertiesController@search');
    Route::post('/viewlocation/{id}', 'UserPlacesController@view');
    // Route::post('/tourplannerlist', 'TourplansController@create');
    Route::post('/tourplannermap', 'TourplansController@mapview');
    Route::post('/confirmbooking/{id}', 'BookingsController@confirmbooking');
    Route::post('/paymentgateway', 'BookingsController@paymentgateway');

    Route::post('/tourplannerlist', function () {
        return view('user.tourplan.tourplanlist');
    });
});



Route::group(['prefix' => 'ajax'], function () {

    Route::get('/places', 'AjaxController@index');

});