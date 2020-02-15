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

use Illuminate\Support\Facades\Route;

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'PageController@index')->name('page.index');
    Route::get('/listing/{listing}', 'ListingController@listing')->name('page.listing');
});

Route::namespace('Auth')->group(function () {
    Route::get('/auth/login', 'AuthController@login_form')->name('login');
    Route::post('/auth/login', 'LoginController@login')->name('login');
    Route::get('/auth/register', 'AuthController@register_form')->name('auth.register_form');
    Route::post('/auth/register', 'AuthController@register')->name('auth.register');
    Route::post('/auth/logout', 'LoginController@logout')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::namespace('Portal')->group(function () {
        Route::get('/portal', 'PortalController@index')->name('portal.index');

        Route::get('/portal/profile/edit', 'ProfileController@edit')->name('portal.profile.edit');
        Route::put('/portal/profile/update', 'ProfileController@update')->name('portal.profile.update');

        Route::get('/portal/listing', 'ListingController@index')->name('portal.listing.index');
        Route::get('/portal/listing/create', 'ListingController@create')->name('portal.listing.create');
        Route::post('/portal/listing', 'ListingController@store')->name('portal.listing.store');
        Route::get('/portal/listing/{listing}/edit', 'ListingController@edit')->name('portal.listing.edit');
        Route::put('/portal/listing/{listing}', 'ListingController@update')->name('portal.listing.update');
        Route::get('/portal/listing/{listing}/delete', 'ListingController@delete')->name('portal.listing.delete');
        Route::delete('/portal/listing/destory/{listing}', 'ListingController@destroy')->name('portal.listing.destroy');
    });
});