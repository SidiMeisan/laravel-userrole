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

Route::group(['middleware' => 'role:super-admin'], function() {
   Route::get('/users', 'usersController@index')->name('index');
   Route::get('/downloadPDF','usersController@downloadPDF');
   Route::get('/downloadXLSX', 'usersController@downloadXLSX');
   Route::get('/menu1', function() {
      return 'Super Menu 1';
   });
   Route::get('/menu2', function() {
      return 'Super Menu 2';
   });
   Route::get('/menu3', function() {
      return 'Super Menu 3';
   });
   Route::get('/menu4', function() {
      return 'Super Menu 4';
   });
   Route::get('/menu5', function() {
      return 'Super Menu 5';
   });
});

Route::group(['middleware' => 'role:admin'], function() {
   Route::get('/1', function() {
      return 'Menu 1';
   });
   Route::get('/2', function() {
      return 'Menu 2';
   });
   Route::get('/3', function() {
      return 'Menu 3';
   });
});

Route::group(['middleware' => 'role:peminjam'], function() {
   Route::get('/4', function() {
      return 'Menu 4';
   });
   Route::get('/5', function() {
      return 'Menu 5';
   });
});
