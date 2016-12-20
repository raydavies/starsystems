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

Route::group(['prefix' => 'testimonials'], function() {
	Route::get('/', ['as' => 'testimonials', 'uses' => 'TestimonialController@get']);
	Route::get('/create', ['as' => 'testimonials.create', 'uses' => 'TestimonialController@create']);
	Route::post('/create', ['as' => 'testimonials.create', 'uses' => 'TestimonialController@store']);
});

Route::get('/curriculum', ['as' => 'curriculum', function() {
	return view('curriculum');
}]);

Route::group(['prefix' => 'lesson-topics'], function() {
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

//Authentication
Route::get('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//Password Reset
Route::get('password/email', ['as' => 'password-reset-email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', ['as' => 'password-reset-email', 'uses' => 'Auth\PasswordController@postEmail']);
Route::get('password/reset/{token}', ['as' => 'password-reset-form-token', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', ['as' => 'password-reset-form', 'uses' => 'Auth\PasswordController@postReset']);

//Admin Dashboard
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function() {
    Route::get('/', function() {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    
    Route::get('/account', ['as' => 'account.info', 'uses' => 'AccountController@index']);
    
    Route::get('/password/change', ['as' => 'password.change', 'uses' => 'PasswordController@index']);
    Route::post('/password/change', ['as' => 'password.change', 'uses' => 'PasswordController@update']);
    
    Route::get('/testimonials', ['as' => 'testimonials', 'uses' => 'TestimonialsController@index']);
    Route::post('/testimonials/{id}/toggle-status', ['as' => 'testimonials.toggle', 'uses' => 'TestimonialsController@toggleStatus']);
    Route::post('/testimonials/{id}/delete', ['as' => 'testimonials.delete', 'uses' => 'TestimonialsController@delete']);
});
