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




Route::get('/login/charity', 'Auth\LoginController@showCharityLoginForm');
Route::get('/login/volunteer', 'Auth\LoginController@showVolunteerLoginForm');
Route::get('/register/charity', 'Auth\RegisterController@showCharityRegisterForm');
Route::get('/register/volunteer', 'Auth\RegisterController@showVolunteerRegisterForm');

Route::post('/login/charity', 'Auth\LoginController@charityLogin');
Route::post('/login/volunteer', 'Auth\LoginController@volunteerLogin');
Route::post('/register/charity', 'Auth\RegisterController@createCharity');
Route::post('/register/volunteer', 'Auth\RegisterController@createVolunteer');

Route::view('/volunteer-dashboard','volunteer-dashboard')->middleware('auth:volunteer');
Route::view('/charity-dashboard','charity-dashboard')->middleware('auth:charity');
Route::view('/edit-volunteer-info','edit-volunteer-info');
Route::view('/edit-charity-info','edit-charity-info');
Route::view('/volunteers-request','volunteers-request');
