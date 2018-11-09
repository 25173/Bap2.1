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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/aboutMe', function () {
    return  view("aboutMe");
});

Route::get('/test','TestController@testQuery');

Route::get('/contactForm', 'FormController@showForm')
     ->name('contact.form');

Route::post('/contactForm', 'FormController@handleForm')
     ->name('contact.form.handle');

Route::get('/contact', function () {
	return  view("contact");
});

Route::get('/toernooien', function () {
	return  view("toernooien");
});
Route::get('/regels', function () {
	return  view("regels");
});
Route::get('/sponsors', function () {
	return  view("sponsors");
});
