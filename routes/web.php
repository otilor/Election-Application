<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// Route::get('/{any}', 'SpaController@index')->where('any', '.*');
Route::get('/', 'HomeController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/polls', 'Web\PollController');