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



// Route::get('/home', function () {
//     return view('modul.home');
// });

// Route::get('/question/dvwa-gabisa-di-linux', function () {
//     return view('modul.question');
// });

// Route::get('/new-post',function(){
//     return view('modul.post');
// });

/*Route::get('/browse-channel',function(){
    return view('modul.browse_channel');
});

Route::get('/create-channel',function(){
    return view('modul.create_channel');
});
*/

// Route::get('/create-matkul',function(){
//     return view('modul.create_matkul');
// });

Route::get('/profilku', function () {
    return view('modul.profilku');
});



Route::get('browse-tag',function(){
    return view('modul.browse_tag');
});



Route::resource('/login', 'LoginController');
Route::resource('/daftar', 'DaftarController');
Route::resource('/pertanyaan', 'PertanyaanController');
Route::resource('/matkul', 'MatkulController');
Route::resource('/home', 'HomeController');
Route::get('/get_tag','HomeController@index_search_tag')->name('search_by_tag_get');
Route::post('/pertanyaan/tag','HomeController@index_search_tag')->name('search_by_tag');
Route::post('/get_matkul','HomeController@index_search_matkul')->name('search_by_matkul');
Route::get('/set_matkul','HomeController@index_set_matkul')->name('search_by_matkul_set');

Route::get('/get_tag/question','QuestionController@index_search_tag')->name('search_by_tag_get_question');
Route::post('/pertanyaan/tag/question','QuestionController@index_search_tag')->name('search_by_tag_question');
Route::post('/get_matkul/question','QuestionController@index_search_matkul')->name('search_by_matkul_question');
Route::get('/set_matkul/question','QuestionController@index_set_matkul')->name('search_by_matkul_set_question');

Route::get('/question/{id}','QuestionController@index')->name('question_index');
Route::resource('/question','QuestionController');

Route::resource('/dashboard','DashboardController');
Route::post('/search_dashboard','DashboardController@post_index')->name('post_index');

