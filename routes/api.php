<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/profile', 'ProfileController@index');


Route::get('/', function () {
    $data = ['message' => 'welcome', 'status' => '200'];
   return response()->json($data, 200);
});

Route::get('/polls', 'PollController@index');
Route::get('polls/{poll}', 'PollController@show');


Route::get('positions/{position}', 'PositionController@show');
Route::get('positions', 'PositionController@index');
