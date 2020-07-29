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

// Student routes
Route::group(['prefix' => 'student', 'middleware' => 'gateman'], function () {
	Route::get('/', function () {
		return view('student.index');
	});
	Route::resource('/polls', 'Web\PollController');
	Route::get('/polls/{id}/positions', 'Web\PositionController@index');
	Route::get('/polls/{id}/positions/{positionId}', 'Web\PositionController@show');
	Route::post('vote', 'Web\VoteController@store');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
	Route::get('/', 'Web\Admin\AdminController@index');
	Route::post('polls/store', 'Web\Admin\PollController@store');
	Route::resource('/polls', 'Web\Admin\PollController');
	
	Route::get('/polls-sessions-links', 'Web\Admin\PollSessionLinkController@index');

	Route::get('/polls-sessions-links/polls', 'Web\Admin\PollSessionLink\PollController@index');
	Route::get('/polls-sessions-links/polls/all', 
		'Web\Admin\PollSessionLink\PollController@all'
	);
	Route::get('/polls-sessions-links/polls/create', 
		'Web\Admin\PollSessionLink\PollController@create'
	);
	Route::get('/polls-sessions-links/polls/{id}', 
		'Web\Admin\PollSessionLink\PollController@show'
	);
	

	Route::post('/polls-sessions-links/polls/store', 
		'Web\Admin\PollSessionLink\PollController@store'
	)->name('admin.polls_sessions_links.store');

	Route::get('/polls-sessions-links/polls/{id}/positions', 
		'Web\Admin\PositionController@index'
	);


	Route::get('/polls-sessions-links/polls/{id}/positions/create', 
		'Web\Admin\PositionController@create'
	);
	
	Route::get('/polls-sessions-links/polls/{id}/positions/{positionId}', 
		'Web\Admin\PositionController@show'
	);


	Route::get('/polls-sessions-links/polls/{id}/positions/{positionId}/contestants/create', 
		function ($id, $positionId) {
			$users = \App\User::all();
			return view('admin.contestants.create', compact('users', 'id', 'positionId'));
		}
	);

	Route::post('/polls-sessions-links/polls/{id}/positions/{positionId}/contestants/store', 
		'Web\Admin\ContestantController@store'
	);

	Route::post('/polls-sessions-links/polls/{id}/positions/store', 
		'Web\Admin\PositionController@store'
	);

	Route::get('/students', 'Web\Admin\StudentController@index');	
	Route::get('students/accounts', 'Web\Admin\StudentController@accounts');
	Route::get('students/create', 'Web\Admin\StudentController@create');
	Route::post('students/store', 'Web\Admin\StudentController@store')->name('admin.students.store');
	Route::get('students/{id}', 'Web\Admin\StudentController@show');
	Route::patch('students/{id}', 'Web\Admin\StudentController@update');
});
