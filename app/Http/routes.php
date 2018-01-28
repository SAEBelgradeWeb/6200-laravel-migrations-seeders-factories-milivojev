<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//naming routes l 24

Route::get('/proba/nova-ruta',array('as'=>'nova.ruta', function(){
    $url = route('nova.ruta');
    echo " the url of this route is: {$url}";
}));


//
//prosledjivanje parametara kroz controler l 23 passing data
Route::get('/proba/{id}',function($id){
   echo "proba prosledjivanja parametra id = {$id}";
});

Route::resource('/posts','PostsController');

//l 32
Route::get('contact/{id}/{name}/{var}','PostsController@contact');

Route::get('blog/{id}/{title}/{author}','PostsController@blog');


//lession 29




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
