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

Route::get('/', function () {
    return view('public.index');
});

Route::namespace('Portal')->group(function () {
    Route::get('/portal/listing', 'ListingController@index')->name('portal.listing.index');
    Route::get('/portal/listing/create', 'ListingController@create')->name('portal.listing.create');
    Route::post('/portal/listing', 'ListingController@store')->name('portal.listing.store');
    Route::get('/portal/listing/{listing}/edit', 'ListingController@edit')->name('portal.listing.edit');
    Route::put('/portal/listing/{listing}', 'ListingController@update')->name('portal.listing.update');
});
