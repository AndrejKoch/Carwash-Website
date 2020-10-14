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

Auth::routes();

Route::group(['middleware' => ['web', 'auth', 'check.user:Admin']], function () {

    {
        Route::resource('/services', 'ServicesController');
        Route::resource('/slider', 'SliderController');
        Route::resource('/settings', 'SettingsController');
        Route::resource('/introcards', 'IntroCardsController');
        Route::resource('/slidercontent', 'SliderContentController');
        Route::resource('/products', 'ProductController');
        Route::resource('/user', 'UserController');
    };
});


Route::get('/', 'FrontEndController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/send-message', 'EmailController@sendContact');
