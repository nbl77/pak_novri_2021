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

Route::get('/', 'BlogController@index');
Route::get('/list/{type}', 'BlogController@list');
Route::middleware('auth:admin')->group(function () {
  Route::get('/admin', 'PagesController@index')->name('dashboard');
  Route::get('/admin/pelajaran', 'PagesController@pelajaran')->name('pelajaran');
  Route::get('/admin/edit_study', 'PagesController@editPelajaran');
  Route::get('/admin/blog/aplikasi', 'BlogManageController@aplikasi');
});

Route::middleware('auth:web')->group(function () {
  Route::get('/user', 'PagesController@userDashboard')->name('user_dashboard');
  Route::get('/user/user_pelajaran', 'PagesController@pelajaranUser');
});

//Login
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/logout', 'PagesController@logout')->name('logout');
Route::post('/login', 'PagesController@loginAuthenticate');

Route::middleware('auth')->group(function () {
  //Download excel
  Route::get('/download', 'ExportExcelController@excel');

  Route::get('/redirect/{url}', 'PagesController@redirect');
});



// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
