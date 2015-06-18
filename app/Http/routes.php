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

Route::get('/', 'HomeController@index');
Route::get('home', function() {
	dd(env('DB_DATABASE'));
	return redirect('/');
});

Route::get('questionnaire', function() {
	return redirect('https://docs.google.com/forms/d/1vzoX5iFECidjX4Eg0lmBoJAwQeJLZwo6cfYrg1sA_sU/viewform');
});
//Route::get('preview', 'HomeController@index');
Route::get('eventdd', 'EventController@getRemoteEventsdd');

Route::resource('about/news', 'UpdateController');
Route::resource('about/events', 'EventController');
Route::resource('about/galleries', 'GalleryController');
Route::resource('academylife/sports-news', 'SportsController');
Route::resource('resources', 'ResourceController');

/*
 | Prevent access of top level route names
*/
Route::get('attachments/{post}/{file}', 'AttachmentController@show');

Route::get('about', function() {
	return redirect('/');
});
Route::get('parents', function() {
	return redirect('/');
});
Route::get('academy', function() {
	return redirect('/');
});
Route::get('learning', function() {
	return redirect('/');
});
Route::get('information', function() {
	return redirect('/');
});

Route::get('contact', 'HomeController@contact');
Route::get('preschool', 'HomeController@preschool');
Route::get('sportspremium', 'HomeController@sportspremium');
Route::get('about/about', 'HomeController@about');
Route::get('about/aims', 'HomeController@aims');
Route::get('about/safeguarding', 'HomeController@safeguarding');
//Route::get('about/galleries', 'HomeController@galleries');
Route::get('about/newsletters', 'HomeController@newsletters');
Route::get('community/ourcommunity', 'HomeController@ourcommunity');
Route::get('community/governors', 'HomeController@governors');
Route::get('community/ptfa', 'HomeController@ptfa');
Route::get('learning/everychild', 'HomeController@everychild');
Route::get('learning/curriculumoverview', 'HomeController@curriculumoverview');
Route::get('learning/sport', 'HomeController@sport');
Route::get('learning/library', 'HomeController@library');
Route::get('learning/assessmentnolevels', 'HomeController@assessmentnolevels');
Route::get('learning/growyourbrain', 'HomeController@growyourbrain');
Route::get('academylife/catering', 'HomeController@catering');
Route::get('academylife/music', 'HomeController@music');
Route::get('academylife/tuckshop', 'HomeController@tuckshop');
Route::get('parents/attendance', 'HomeController@attendance');
Route::get('parents/esafety', 'HomeController@esafety');
Route::get('parents/support', 'HomeController@support');
Route::get('parents/letters', 'HomeController@letters');
Route::get('further/admissions', 'HomeController@admissions');
Route::get('further/policies', 'HomeController@policies');

Route::post('contact', 'HomeController@contactSend');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('img/{path}', function (Illuminate\Http\Request $request) {

	$server = League\Glide\ServerFactory::create([
	    'source' => '../storage/app/images',
	    'cache' => '../storage/app/images/.cache',
	    'base_url' => '/img/',
	]);
	$server->outputImage($request);
})->where('path', '.+');