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

Route::get('/', 'PagesController@index');

/*Route::get('/users', function() {
	$data = [
		'0' => [
			'First name' => 'Jobayer',
			'Last Name' => 'Sheikh',
			'Location' => 'Rangpur'
		],
		'1' => [
			'First name' => 'Jobayer',
			'Last Name' => 'Sheikh',
			'Location' => 'Rangpur'
		]
	];
	return $data;
});*/

Route::get('/users', ['uses' => 'UsersController@index']);
Route::get('/users/create', ['uses' => 'UsersController@create']);
Route::post('/users', ['uses' => 'UsersController@store']);

Route::get('/books', function(){
	return 'This is books';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'PagesController@profile');
Route::get('/settings', 'PagesController@settings');
Route::get('/blade', 'PagesController@blade');