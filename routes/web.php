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
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {
	return redirect()->route("login");
});

Route::get('/client', function () {
	echo "client";
});

Route::prefix("/admin")->group(function () {
	Route::get("/", function () {
		return redirect()->route("import.clients");
	});
	Route::get('/import-client-view', 'ClientController@importClientView')->name('import.clients');
	Route::post('/import', 'ClientController@importFile');
});
