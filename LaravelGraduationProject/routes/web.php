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

Route::get('/get_jawwalandwataniya_images', function () {
    return view('get_jawwalandwataniya_images');
});



Route::get('/insta_logo_exist', function () {
    return view('insta_logo_exist');
});

Route::get('/auth/login', function () {
    return view('auth/login');
});


Route::get('/contactUS', function () {
    return view('contactUS');
});

Route::get('/get_insta_images', function () {
    return view('get_insta_images');
});

Route::get('/logout', 'Auth\LoginController@logout');



Route::get('contact', 'ContactUSController@contactUS');
Route::post('contact', ['as'=>'contact.store','uses'=>'ContactUSController@contactUSPost']);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

