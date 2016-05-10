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
    Route::resource('logs', 'LogsController');

    Route::resource('lights_sockets', 'Lights_SocketsController');

    Route::resource('lights_sockets', 'Lights_SocketsController');

    Route::get('home/house', ['as' => 'house', 'uses' => 'HouseController@index']);

    Route::get('lights_sockets/{id}/alterarStatus', ['as' => 'alterarStatus', 'uses' => 'Lights_SocketsController@alterarStatus']);

    Route::get('lights_sockets/{id}/alterarStatusOff', ['as' => 'alterarStatus', 'uses' => 'Lights_SocketsController@alterarStatusOff']);

    Route::get('house/terraco', ['as' => 'terraco', 'uses' => 'HouseController@terraco']);

    Route::get('house/sala', ['as' => 'terraco', 'uses' => 'HouseController@terraco']);

    Route::get('house/quarto', ['as' => 'quarto', 'uses' => 'HouseController@quarto']);

});
Route::get('house/receiveOfArduino/code/{code}/status/{status}/type/{type}', ['as' => 'receiveOfArduino', 'uses' => 'HouseController@receiveOfArduino']);