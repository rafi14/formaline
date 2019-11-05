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
    return view('dashboard');
});

Route::get('/home', function () {
    return view('modul.home');
});

Route::get('/question/dvwa-gabisa-di-linux', function () {
    return view('modul.question');
});

Route::get('/new-post',function(){
    return view('modul.post');
});

Route::get('/create-channel',function(){
    return view('modul.create_channel');
});

Route::get('/create-matkul',function(){
    return view('modul.create_matkul');
});

Route::get('/profilku', function () {
    return view('modul.profilku');
});

Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/register', function () {
    return view('layouts.register');
});
