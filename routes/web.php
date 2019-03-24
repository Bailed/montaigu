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


Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'JobsController@add')->name('job.add');
Route::get('/', 'Controller@index')->name('index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('mise-a-jour-entreprise','CompaniesController@update')->name('company.update');
    Route::post('mise-a-jour-entreprise/{uid}','CompaniesController@updatePost')->name('company.update.post');
    Route::get('administration','AdminController@dashboard')->name('admin.dashboard');

    Route::get('job/{uid}','JobsController@edit')->name('job.edit');
    Route::post('job/{uid}', 'JobsController@update')->name('job.edit.post');
    Route::get('job/{uid}/delete', 'JobsController@delete')->name('job.delete');

    Route::get('company/{uid}/read', 'CompaniesController@read')->name('company.read');
});

// Companies Routes...

Route::get('creation-entreprise','CompaniesController@create')->name('create_company');
Route::post('creation-entreprise', 'CompaniesController@createPost');



// Authentication Routes...
Route::get('connexion', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('connexion', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
