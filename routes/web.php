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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/edit-profile', 'UserController@editUser')->name('editUser');
Route::post('/update-profile', 'UserController@update')->name('users.update');
Route::get('/change-password', 'UserController@viewChangePassword')->name('user.changePassword');
Route::post('/change-password', 'UserController@changePassword')->name('user.changePassword');
Route::get('/city/{id}/list-house', 'HomeController@showHouseForCity')->name('city.listHouse');


Route::prefix('/user')->group(function () {
    Route::get('house-posted', 'UserController@showHousePostedAndBooking')->name('user.showHousePosted');
    Route::get('accept/{uid}', 'UserController@acceptAndSendEmail')->name('user.accept');
    Route::post('reject', 'UserController@rejectAndSendEmail')->name('user.reject');
    Route::post('reject-booking', 'UserController@rejectBooking')->name('user.rejectBooking');
    Route::get('alert', 'UserController@alert')->middleware('auth');
    Route::get('revenue-statistics-by-month', 'UserController@revenueStatisticsByMonth')->name('user.statistics');
    Route::post('revenue-statistics-by-month', 'UserController@revenueStatisticsByMonth')->name('user.statistics');
});


Route::get('get-district-list', 'HomeController@getDistrictList');


Route::prefix('houses')->group(function () {
    Route::get('/create', 'HouseController@create')->name('createHouse')->middleware('auth');
    Route::post('/store', 'HouseController@store')->name('storeHouse')->middleware('auth');
    Route::get('image', 'HouseController@createImage')->name('createImage')->middleware('auth');
    Route::post('store/image', 'HouseController@storeImage')->name('storeImage')->middleware('auth');
    Route::get('totalHouse/{id}', 'HouseController@totalHouse')->name('totalHouse');
    Route::post('search', 'HomeController@search')->name('search');
    Route::post('rating/{id}', 'HouseController@rating')->name('rating');
    Route::post('comment', 'HouseController@addComment')->name('addComment');
    Route::get('select-city-district', 'HouseController@selectCityandDistrict');
    Route::get('find-house-by-history-booking', 'HouseController@findHistoryHouseBooking')->middleware('auth');
    Route::get('change-status', 'HouseController@changeStatus')->middleware('auth');
    Route::get('showMap/{id}', 'HouseController@showMap')->name('showMap');
    Route::get('total-Day-And-Price', 'HouseController@totalDayAndPrice')->name('totalDayAndPrice');
});

Route::prefix('order')->group(function () {
    Route::get('rentHouse', 'OrderController@RentHouse')->name('order.rent');
    Route::get('{id}/histories', 'OrderController@Histories')->name('order.history');
});

Route::prefix('comment')->group(function () {
    Route::get('');
});
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
