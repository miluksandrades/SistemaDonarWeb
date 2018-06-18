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
    Route::post('user/profile/edit', 'UserController@edit')->name('user.profile.edit');

    Route::get('campaigns', 'CampaignController@index')->name('campaigns');
    Route::get('campaigns/cadastrar', 'CampaignController@index1')->name('campaigns.Cadastrar');
    Route::post('campaigns/create', 'CampaignController@create')->name('campaigns.create');
    Route::post('campaigns/edit', 'CampaignController@edit')->name('campaigns.edit');

    Route::get('donations.register', 'DonationController@register')->name('donations.register');
});

