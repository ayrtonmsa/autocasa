<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/house', [
    'as' => 'house', 'uses' => 'HouseController@index'
]);

// Route::get('lightssockets', [
//     'as' => 'lightssockets', 'uses' => 'LightSocketController@index'
// ]);
// Route::get('lightssockets/create', [
//     'as' => 'lightssockets/create', 'uses' => 'LightSocketController@create'
// ]);
// Route::post('lightssockets/save', [
//     'as' => 'lightssockets/save', 'uses' => 'LightSocketController@save'
// ]);

Route::resource('lightssockets', 'LightSocketController');

Route::post('home/alterarStatusCasa', [
    'as' => 'alterarStatusCasa', 'uses' => 'HouseController@alterarStatusCasa'
]);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	//
});
