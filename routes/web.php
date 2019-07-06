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

//Page
Route::get('/', 'PagesController@getHomePage');
Route::get('/about', 'PagesController@getAboutPage');
Route::get('/duacare-loyal-donature', 'PagesController@getDLDPage');
Route::get('/organizer', 'PagesController@getOrganizerPage');
Route::get('/news', 'PagesController@getNewsPage');
Route::get('/news/id', 'PagesController@getNewsDetailPage'); //temporary
Route::get('/contact', 'PagesController@getContactPage');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

});

