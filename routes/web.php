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
    return view('home');
});
Route::get('/table', 'QuizmenghitungController@index');
Route::resource('quiz', 'QuizController');

Route::get('/menyanyi', function () {
    return view('hiburan/createmenyanyi');
});

Route::get('/mewarna', function () {
    return view('hiburan/createmewarna');
});

Route::get('/warna', function () {
    return view('belajar/createwarna');
});
