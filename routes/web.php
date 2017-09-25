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

// Authentication routes
Route::group(['prefix' => 'auth'], function() {
    Auth::routes();
});

// Dashboard
Route::group(['prefix', 'me', 'namespace' => 'Dashboard'], function() {
    Route::get('/', 'HomeController@home')->name('dashboard');
  /*  Route::group(['prefix' => 'settings'], function($setting) {
        $setting->get('/', 'SettingsController@settings')->name('settings');
        $setting->get('profile', 'SettingsController@settings')->name('settings.profile');
        $setting->get('security', 'SettingsController@settings')->name('settings.security');
    });*/
});