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
    return view('welcome');
});
Route::get('1', function () {
    return view('balance');
});
Route::get('2', function () {
    return view('billing');
});
Route::get('3', function () {
    return view('buyerrequest');
});
Route::get('4', function () {
    return view('category');
});
Route::get('5', function () {
    return view('findwork');
});
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
Route::get('11', function () {
    return view('singlebid');
});
Route::get('12', function () {
    return view('singlepost');
});
Route::get('13', function () {
    return view('security');
});
