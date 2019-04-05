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

Route::get('/index', 'FirstPageController@index');
Route::get('/search', function () {
    return view('job-search');
});
Route::get('/detail', function () {
    return view('job_detailed');
});
Route::get('/all-volunteers', 'FirstPageController@allVolunteer');

Route::get('/all-projects', function () {
    $projects = App\Project::where('is_archive',false)->get();
//    $charity=\App\Charity::find(1);
//    $charity->notify(new App\Notifications\CharityWelcomeNotification());
    return view('all-projects', compact('projects'));
});
Route::get('/project-more-info/{id}', 'FirstPageController@projectMoreInfo')->name('all-project-more-info');

Route::view('/admin-base', 'layouts.admin');


Route::get('/login/charity', 'Auth\LoginController@showCharityLoginForm');
Route::get('/login/volunteer', 'Auth\LoginController@showVolunteerLoginForm');
Route::get('/register/charity', 'Auth\RegisterController@showCharityRegisterForm');
Route::get('/register/volunteer', 'Auth\RegisterController@showVolunteerRegisterForm');

Route::post('/login/charity', 'Auth\LoginController@charityLogin');
Route::post('/login/volunteer', 'Auth\LoginController@volunteerLogin');
Route::post('/register/charity', 'Auth\RegisterController@createCharity');
Route::post('/register/volunteer', 'Auth\RegisterController@createVolunteer');
Route::post('logout/charity', 'Auth\LoginController@charityLogout');
Route::post('logout/volunteer', 'Auth\LoginController@volunteerLogout');

Route::post('/projects/update/{id}', 'ProjectController@update')->name('project-update')->middleware('auth:charity');
Route::get('/projects/more-info/{id}', 'ProjectController@show')->name('project-more-info')->middleware('auth:charity');
Route::get('/charity/more-info/{id}', 'FirstPageController@charityMoreInfo')->name('charity-more-info');


Route::get('/volunteer-dashboard', 'VolunteerController@index');
Route::get('/charity-dashboard', 'CharityController@index');

Route::get('/edit-volunteer-info', 'VolunteerController@edit');
Route::post('/edit-volunteer-info/{id}', 'VolunteerController@update')->name('volunteer-update');
Route::get('/edit-charity-info', 'CharityController@edit');
Route::post('/edit-charity-info/{id}', 'CharityController@update')->name('charity-update');

Route::get('/volunteers-request', 'CharityController@show');
Route::post('/volunteers-request/{id}', 'CharityController@accept')->name('accept-volunteer');
Route::post('/change-volunteer-situation/{id}', 'VolunteerController@changeSituation')->name('volunteer-situation');
Route::post('/ready-for-project/{id}', 'VolunteerController@announcement')->name('ready-announcement');

Route::get('/create-project', 'ProjectController@create')->name('create-project')->middleware('auth:charity');
Route::post('/create-project', 'ProjectController@store')->name('add-project');
Route::post('/project/edit-requirement/{id}', 'ProjectController@editRequirement')->name('edit-requirement');
Route::post('projects/create-requirement/{id}', 'ProjectController@storeRequirement')->name('create-requirement');


//search Routes
Route::get('/project-search', 'SearchController@projectSearch')->name('project-search');
Route::get('volunteer-search','SearchController@volunteerSearch')->name('volunteer-search');


//comment
Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');


//password recovery section

Route::prefix('charity')->group(function () {
    Route::post('/password/email', 'Auth\CharityForgotPasswordController@sendResetLinkEmail')->name('charity.password.email');
    Route::get('/password/reset', 'Auth\CharityForgotPasswordController@showLinkRequestForm')->name('charity.password.request');
    Route::post('/password/reset', 'Auth\CharityResetPasswordController@reset')->name('charity.password.update');
    Route::get('/password/reset/{token}', 'Auth\CharityResetPasswordController@showResetForm')->name('charity.password.reset');
});
Route::prefix('volunteer')->group(function () {
    Route::post('/password/email', 'Auth\VolunteerForgotPasswordController@sendResetLinkEmail')->name('volunteer.password.email');;
    Route::get('/password/reset', 'Auth\VolunteerForgotPasswordController@showLinkRequestForm')->name('volunteer.password.request');;
    Route::post('/password/reset', 'Auth\VolunteerResetPasswordController@reset')->name('volunteer.password.update');;
    Route::get('/password/reset/{token}', 'Auth\VolunteerResetPasswordController@showResetForm')->name('volunteer.password.reset');
});
