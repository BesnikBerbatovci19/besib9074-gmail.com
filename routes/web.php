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


Route::group(['middleware' => ['is_admin',]], function () {
Route::get('/user','UserController@index')->name('user.index');
Route::get('/user/register','UserController@show')->name('user.show');
Route::post('/user/store','UserController@store')->name('user.store');

Route::get('searchadmin','SearchController@index')->name('searchadmin.index');
Route::get('/search/searchuserhistory','SearchController@searchuserhistory')->name('searchuserhistory');
Route::post('/user/update/{id}','UserController@update')->name('user.update');
Route::get('/user/{id}/edit','UserController@edit')->name('user.edit.');
Route::delete('/user/delete/{id}','UserController@destroy')->name('user.destroy.');

});


Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');


Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

Route::group(['middleware' => ['auth']], function () {
    //Route::get('/', 'HomeController@index');
    /* multi sms route*/
    Route::get('/about','HomeController@index')->name('about.index');
    Route::get('/Multi','MultiSmsController@index')->name('multi.index');
    Route::post('Multi-store', 'MultiSmsController@store');
    Route::get('/test', 'testcontroller@test');
    Route::post('/sms-store', 'SmsController@store');
    Route::post('/sms-store/destroy/{id}', 'SmsController@destroy');
   // Route::get('/sms-store/show', 'SmsController@show')->name('sms.show');
    Route::get('/', 'SmsController@index')->name('sms.index');
    Route::get('/user/searchuser','SearchController@searchuser')->name('seachuser');
    Route::get('/search/show','SearchController@show')->name('serach.show');


    Route::group(['middleware' => ['is_admin']], function () {

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...


    });

});

