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

Route::get('/', function () {
    return view('start');
});

Route::get('home', function () {
    return view('home');
});

Route::get('/searchimages', function () {
    return view('searchimages');
});




Route::get('/auth/login', function () {
    return view('auth/login');
});


Route::get('/contactUS', function () {
    return view('contactUS');
});

Route::get('/get_hashtaginsta_images', function () {
    return view('get_hashtaginsta_images');
});

Route::get('/get_locationinsta_images', function () {
    return view('get_locationinsta_images');
});

Route::get('/cities', function () {
    return view('cities');
});


Route::get('/insta_map', function () {
    return view('insta_map');
});

Route::get('/get_instagram_images', function () {
    return view('get_instagram_images');
});

Route::get('/insta_logo_exist1', function () {
    return view('insta_logo_exist1');
});

Route::get('/insta_logo_exist2', function () {
    return view('insta_logo_exist2');
});

Route::get('/Get_tweets', function () {
    return view('Get_tweets');
});

Route::get('/twitter_logo_exist', function () {
    return view('twitter_logo_exist');
});

Route::get('/new', function () {
    return view('new');
});


Route::get('/logout', 'Auth\LoginController@logout');



Route::get('contact', 'ContactUSController@contactUS');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactUSController@contactUSPost']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

