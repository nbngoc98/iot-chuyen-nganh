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

// Example Routes
Route::view('/', 'landing');
// Route::match(['get', 'post'], '/dashboard', function(){
//     return view('dashboard');
// });
Route::view('/pages/slick', 'pages.slick');
Route::view('/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::get('/dashboard', 'FirebaseController@index')->name('dashboard');

Route::get('/view-he-thong', 'FirebaseController@detail_view')->name('view-hethong');
Route::get('/setting-he-thong', 'FirebaseController@setting')->name('setting-hethong');

Route::get('/get', 'FirebaseController@get');

Route::get('/turn-off-relay/{irrigation}', 'FirebaseController@turn_off_relay')->name('turn_off_relay');
Route::get('/turn-on-relay/{irrigation}', 'FirebaseController@turn_on_relay')->name('turn_on_relay');

Route::get('/edit-threshold/{irrigation}', 'FirebaseController@edit_threshold_get')->name('edit_threshold_get');
Route::post('/edit-threshold/{irrigation}', 'FirebaseController@edit_threshold_post')->name('edit_threshold_post');

