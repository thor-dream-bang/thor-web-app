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
    return view('welcome');
});
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel";
});
Route::get('applicant', 'User\ApplicantController@index');
Route::get('applicant/biodata', 'User\ApplicantController@biodata');
Route::get('applicant/biodata/{nama}', 'User\ApplicantController@userinfo');
// Route::get('applicant/biodata/detail', 'User\ApplicantController@userdetail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/vuetest', function(){
    return view('vuetest');
});

Route::get('/selfvue/router', function(){
    return view('selfvue.router');
});

Route::get('/selfvue/router/transition', function(){
    return view('selfvue.router-transition');
});
