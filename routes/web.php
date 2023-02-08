<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});

Route::get ('/howitswork', function (){
    return view('howitswork');
});

Route::get ('/medical', function (){
    return view('medical');
});

Route::get ('/emergency', function (){
    return view('emergency');
});

Route::get ('/education', function (){
    return view('education');
});

Route::get ('/login', function (){
    return view('login');
});

Route::get ('/registration', function (){
    return view('registration');
});