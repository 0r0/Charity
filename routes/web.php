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
Route::view('/all-volunteers','all-volunteers');

Route::get('/all-projects',function(){
    $projects=App\Project::all();
    return view('all-projects',compact('projects'));
});
Route::view('/admin-base','layouts.admin');




Route::get('/login/charity', 'Auth\LoginController@showCharityLoginForm');
Route::get('/login/volunteer', 'Auth\LoginController@showVolunteerLoginForm');
Route::get('/register/charity', 'Auth\RegisterController@showCharityRegisterForm');
Route::get('/register/volunteer', 'Auth\RegisterController@showVolunteerRegisterForm');

Route::post('/login/charity', 'Auth\LoginController@charityLogin');
Route::post('/login/volunteer', 'Auth\LoginController@volunteerLogin');
Route::post('/register/charity', 'Auth\RegisterController@createCharity');
Route::post('/register/volunteer', 'Auth\RegisterController@createVolunteer');

Route::post('/projects/update/{id}','ProjectController@update')->name('project-update');
Route::get('/projects/more-info/{id}','ProjectController@show')->name('project-more-info');

Route::get('/volunteer-dashboard','VolunteerController@index');
Route::get('/charity-dashboard','CharityController@index');

Route::get('/edit-volunteer-info','VolunteerController@edit');
Route::get('/edit-volunteer-info/{id}','VolunteerController@update')->name('volunteer-update');
Route::get('/edit-charity-info','CharityController@edit');
Route::post('/edit-charity-info/{id}','CharityController@update')->name('charity-update');

Route::view('/volunteers-request','volunteers-request');
