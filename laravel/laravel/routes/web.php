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


Route::get('', function () {
    return view('index');
});

Route::get('/aboutMe', function () {
    return  view("aboutMe");
});

Route::get('/test','TestController@testQuery');

Route::get('/contact', 'FormController@showForm')
     ->name('contact');

Route::post('/contact', 'FormController@handleForm')
     ->name('contact.handle');

Route::get('/toernooien', function () {
	return  view("toernooien");
});
Route::get('/regels', function () {
	return  view("regels");
});
Route::get('/sponsors', function () {
	return  view("sponsors");
});



Route::get('/photo-gallery', 'PhotoGalleryController@listPhotos')
     ->name('gallery.index');

Route::get('/photo-gallery/add_photo', 'PhotoGalleryController@showPhotoForm')
     ->name('gallery.add_photo');

Route::post('/photo-gallery/add-gallery', 'PhotoGalleryController@savePhotoForm')
     ->name('gallery.save_photo');
