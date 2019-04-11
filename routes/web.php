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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    echo "somthing";
});

Route::prefix('ticket')->group(function () {
    //mac dinh
    Route::get('/', 'TicketController@index');

    //them moi
    Route::get('create', 'TicketController@create');
    Route::post('create', 'TicketController@store');

    //chinh sua
    Route::get('edit/{id}', 'TicketController@edit');
    Route::post('edit/{id}', 'TicketController@update');

    //xoa
    Route::get('delete/{id}', 'TicketController@delete');

});
