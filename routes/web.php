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
    return redirect('/customer');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('customer', 'CustomersController');
    Route::get('/customer/{id}/delete', 'CustomersController@delete');
    
    Route::resource('payments', 'PaymentsController');
    Route::get('/payments/{id}/delete', 'PaymentsController@delete');
    Route::get('/payments/{id}/receipt', 'PaymentsController@receipt');
    Route::get('/payments/{id}/receipt-dp', 'PaymentsController@receipt_dp');
    Route::get('/payments/{id}/update-dp', 'PaymentsController@update_dp');
    
    Route::resource('occupants', 'OccupantsController');
    Route::get('/occupants/{id}/delete', 'OccupantsController@delete');
    
    Route::resource('room', 'RoomsController');
    Route::get('/room/{id}/delete', 'RoomsController@delete');
    
    Route::resource('room-type', 'RoomTypesController');
    Route::get('/room-type/{id}/delete', 'RoomTypesController@delete');
    
    Route::resource('additional-facilities', 'AdditionalFacilitiesController');
    Route::get('/additional-facilities/{id}/delete', 'AdditionalFacilitiesController@delete');
});