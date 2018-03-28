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

Route::get('/', function () {
    return view('inicial');
});

Auth::routes();

Route::prefix('/hemocentro/')->name('hemocentro.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('profile', 'HemocentroController@index')->name('profile');
    Route::post('profile/edit', 'HemocentroController@edit')->name('profile.edit');

    Route::get('user/profile', 'UserController@profile')->name('user.profile');
    Route::get('user/profile/edit', 'UserController@edit')->name('user.profile.edit');
});