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
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    
    return view('welcome');
});
Route::get('/loca', function () {
    
    return view('loca');
});

Route::get('/amine', function () {
    
    return view('amine');
});

Route::get('/maslah', function () {
    
    return view('maslah');
});


Route::get('/modifierprofile', function () {
    
    return view('modifier');
});
Route::get('/test', function () {
    
    return view('test');
});


Route::get('/location','save@index');


Route::get('/maslah','editerprofile@form1');

Route::get('/insert','TestController@insertform');


Route::get('/location', function () {
    $usr=Auth::user();

    return view('location',['user'=>$usr]);
});


Route::get('/profile', function () {
    $usr=Auth::user();

    return view('profile',['user'=>$usr]);
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
