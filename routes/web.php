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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {

//     return view('about');
// });
Route:: get('/', 'PagesController@simantel');
Route:: get('/login', 'PagesController@login');
Route:: get('/simantel', 'PagesController@simantel');
// guest
Route:: get('/tower_kecamatan', 'PagesController@tower_kecamatan');
Route:: get('/kecamatan_mersam', 'PagesController@kecamatan_mersam');
Route:: get('/kecamatan_tembesi', 'PagesController@kecamatan_tembesi');
Route:: get('/kecamatan_muarabulian', 'PagesController@kecamatan_muarabulian');
Route:: get('/kecamatan_batinxxiv', 'PagesController@kecamatan_batinxxiv');
Route:: get('/kecamatan_pemayung', 'PagesController@kecamatan_pemayung');
Route:: get('/kecamatan_maroseboulu', 'PagesController@kecamatan_maroseboulu');
Route:: get('/kecamatan_maroseboilir', 'PagesController@kecamatan_maroseboilir');
Route:: get('/kecamatan_bajubang', 'PagesController@kecamatan_bajubang');
// guest

// admin
Route:: get('/kecamatanmersam_admin', 'PagesController@kecamatanmersam_admin');
Route:: get('/kecamatantembesi_admin', 'PagesController@kecamatantembesi_admin');

// admin user management
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
	Route::resource('/users','UsersController');
});
