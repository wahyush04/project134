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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/aboutme', function () {
//     $nama = 'Wahyu Syarif';
//     return view('aboutme', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/aboutme', 'PagesController@aboutme');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
