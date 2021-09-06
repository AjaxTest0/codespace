<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('ihome');
})->name('ihome');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//job
	Route::post('/create_job', 'JobController@createJob')->name('create_job');
	Route::get('/single_job/{job?}', 'JobController@singleJob')->name('single_job');
	Route::get('/find_job', 'JobController@findJob')->name('findJob');

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('1', function () {
    return view('balance');
});
Route::get('2', function () {
    return view('billing');
});
Route::get('/post_job', function () {
    return view('buyerrequest');
})->name('post_job');
Route::get('4', function () {
    return view('category');
});
// Route::get('/find_job', function () {
//     return view('findwork');
// })->name('find_job');

Route::get('6', function () {
    return view('ihome');
});
Route::get('7', function () {
    return view('profile');
});
Route::get('8', function () {
    return view('security');
});
Route::get('9', function () {
    return view('setting');
});
Route::get('10', function () {
    return view('signup_old');
});
Route::get('12', function () {
    return view('singlepost');
});
Route::get('13', function () {
    return view('security');
});
