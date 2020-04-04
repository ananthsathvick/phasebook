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

//use Illuminate\Routing\Route;

Route::get('/', function () {

    if (Auth::user()) {   // Check is user logged in
        return redirect('/home');
    } else {
        return view('front');
    }
    
});

Auth::routes();

Route::get('/autocomplete/fetch', 'HomeController@fetch')->name('user.search');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/account/{id}','HomeController@account');

Route::post('/send_freq','HomeController@send_freq')->name('friend_request');

Route::post('/accept_freq','HomeController@accept_freq')->name('accept_frequest');

Route::get('/messenger', 'HomeController@messanger')->name('messanger');
Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('message', 'HomeController@sendMessage');
