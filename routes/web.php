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

// use Illuminate\Support\Facades\Auth;

Route::get('/dashboard', function () {
    return view('user.home');
});


// Route::get('/user', function () {
//     return view('user.user');
// });

// Route::get('/complaint', function () {
//     return view('user.complaint');
// });

// Route::get('/detail-complaint', function () {
//     return view('user.detail-complaint');
// });

// Route::get('/history', function () {
//     return view('user.history');
// });

// Route::get('/login', 'authController@index');
// Route::post('/login', 'authController@auth');

// Route::get('/admin', function(){
//     return view('admin.dashboard');
// });

Route::get('/admin/history', function(){
    return view('admin.history');
});

Route::get('/cari', function () {
    return view('user.cari');
});

Route::get('/admin/login', 'authController@index');
Route::post('/admin/login', 'authController@auth')->name('admin.login');


Route::put('/update/{$id}', 'tambahanController@update');

Route::get('/get', 'tambahanController@data_admin');


Route::post('/insert', 'tambahanController@insert');
Route::resource('report', 'reportController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
