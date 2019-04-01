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

Route::get('/', 'PageController@index');
Route::get('/contact_us', 'PageController@contact_us');
Route::post('/contact_us/store', 'PageController@contact_us_store');
Route::get('/day_client/{id}', 'PageController@day');
Route::get('/day_client', 'PageController@all_day');
Route::get('/gallery_client', 'PageController@gallery');
Route::get('/rooms_client', 'PageController@rooms');
Route::get('/package_client', 'PageController@package');
Route::get('/offers_client', 'PageController@offers');

Route::get('/admin-login', 'LoginAdminController@index');
Route::post('/login', 'LoginAdminController@login');
Route::get('/logout', 'LoginAdminController@logout');

Route::get('/dashboard', 'DashboardController@index');

// Route::resource('about','AboutController');
Route::get('/abouts', 'AboutsController@index');
Route::get('/abouts/edit/{id}', 'AboutsController@edit');
Route::post('/abouts/update/{id}', 'AboutsController@update');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/edit/{id}', 'AdminController@edit');
Route::post('/admin/update', 'AdminController@update');
Route::get('/admin/add', 'AdminController@add');
Route::post('/admin/store', 'AdminController@store');
Route::post('/admin/remove', 'AdminController@remove');

Route::get('/package', 'PackageController@index');
Route::get('/package/edit/{id}', 'PackageController@edit');
Route::post('/package/update/{id}', 'PackageController@update');
Route::get('/package/add', 'PackageController@add');
Route::post('/package/store', 'PackageController@store');
Route::post('/package/remove', 'PackageController@remove');
Route::post('/package/upload', 'PackageController@upload');

Route::get('/day', 'DayController@index');
Route::get('/day/edit/{id}', 'DayController@edit');
Route::post('/day/update/{id}', 'DayController@update');
Route::get('/day/add', 'DayController@add');
Route::post('/day/store', 'DayController@store');
Route::post('/day/remove', 'DayController@remove');

Route::get('/message', 'MessageController@index');
Route::post('/message/remove', 'MessageController@remove');

Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/edit/{id}', 'GalleryController@edit');
Route::post('/gallery/update/{id}', 'GalleryController@update');
Route::get('/gallery/add', 'GalleryController@add');
Route::post('/gallery/store', 'GalleryController@store');
Route::post('/gallery/remove', 'GalleryController@remove');

Route::get('/social_media', 'SocialMediaController@index');
Route::get('/social_media/edit/{id}', 'SocialMediaController@edit');
Route::post('/social_media/update/{id}', 'SocialMediaController@update');
Route::get('/social_media/add', 'SocialMediaController@add');
Route::post('/social_media/store', 'SocialMediaController@store');
Route::post('/social_media/remove', 'SocialMediaController@remove');