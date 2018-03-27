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
Route::get('/test', function () {
    return view('test');
});

Route::get('/', 'PostController@index');
Route::get('/user', function(){
	return App\User::find(1);
});
Route::get('/about', 'PagesController@about');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show');

Route::get('/cities', function(){
    return App\City::select('cities.*', 'dreams.*')
        ->join('dreams', 'cities.id', '=', 'dreams.city_id')
        ->get();
});

Route::post('/posts/{post}/comments', 'CommentController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
