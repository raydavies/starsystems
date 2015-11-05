<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function() {
	return view('home');
}]);

Route::get('/about', ['as' => 'about', function() {
	return view('about');
}]);

Route::get('/testimonials', ['as' => 'testimonials', function() {
	return view('testimonials');
}]);

Route::get('/curriculum', ['as' => 'curriculum', function() {
	return view('curriculum');
}]);

Route::group(['prefix' => 'sample-lessons'], function() {
	Route::get('/', ['as' => 'lessons', 'uses' => 'LessonController@index']);
	Route::get('/{level_id}', 'LessonController@fetchSubjects');
});

Route::get('/benefits', ['as' => 'benefits', function() {
	return view('benefits');
}]);

Route::get('/faq', ['as' => 'faq', function() {
	return view('faq');
}]);

Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', ['as' => 'contact', 'uses' => 'ContactController@store']);
