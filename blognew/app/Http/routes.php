<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
    ##return view('articles.show');
});
//Route::get('/hello',function(){
//    return 'Hello World!';
//});
//Route::get('hello', 'Hello@index');
Route::get('/hello/{name}', 'Hello@show');
//Route::get('blade', function () {
//    return view('page');
//});
Route::get('blade', function () {
    $drinks = array('Vodka', 'Gin', 'Brandy');
    return view('page', array('name' => 'Testing Laravel Framwork', 'day' => 'Friday', 'drinks' => $drinks)
    );
});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/members', 'MemberController@index');
Route::get('members.create', 'MemberController@create');

Route::get('my-posts', 'PostController@myPosts');
//Route::get('my-posts', function () {
//    return view('my-posts');
//});
Route::resource('posts','PostController');
Route::resource('articles','ArticleController');