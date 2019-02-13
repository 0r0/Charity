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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index',function (){
    return view('index');
});
Route::get('/search',function(){
    return view('job-search');
});
Route::get('/detail',function(){
    return view('job_detailed');
});
Route::view('/all-projects','all-projects');
Route::view('/all-volunteers','all-volunteers');
Route::view('/admin-base','layouts.admin');
Route::view('/volunteer-dashboard','volunteer-dashboard');
Route::view('/charity-dashboard','charity-dashboard');

