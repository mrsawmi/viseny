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
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('users', 'admin\adminController@index');
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'admin\UsersController@index')->name('admin.users');
        Route::get('/create', 'admin\UsersController@create')->name('admin.users.create');
        Route::post('store', 'admin\UsersController@store')->name('admin.users.store');
        Route::get('delete/{user_id}', 'admin\UsersController@delete')->name('admin.users.delete');
        Route::get('edit/{user_id}', 'admin\UsersController@edit')->name('admin.users.edit');
        Route::post('update/{user_id}', 'admin\UsersController@update')->name('admin.users.update');
    });
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'admin\tabloController@index')->name('admin.product');
        Route::get('/create', 'admin\tabloController@create')->name('admin.product.create');
        Route::post('store', 'admin\tabloController@store')->name('admin.product.store');
        Route::get('delete/{tablo_id}', 'admin\tabloController@delete')->name('admin.product.delete');
        Route::get('edit/{tablo_id}', 'admin\tabloController@edit')->name('admin.product.edit');
        Route::post('update/{tablo_id}', 'admin\tabloController@update')->name('admin.product.update');
    });
    Route::group(['prefix' => 'ticket'], function () {
        Route::get('/', 'ticketController@index')->name('admin.ticket');
        Route::get('/create', 'ticketController@create')->name('admin.ticket.create');
        Route::post('store', 'ticketController@store')->name('admin.ticket.store');
        Route::get('answer/{ticket_id}', 'ticketController@answer')->name('admin.ticket.answer');
        Route::post('feedback/{ticket_id}', 'ticketController@feedback')->name('admin.ticket.sendfeedback');
        Route::get('close/{ticket_id}', 'ticketController@close')->name('admin.ticket.close');
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'ordersController@index')->name('admin.order');
        Route::post('store', 'ordersController@store')->name('admin.order.store');
        Route::get('delete/{order_id}', 'ordersController@answer')->name('admin.order.delete');
        Route::get('edit/{order_id}', 'ordersController@feedback')->name('admin.order.sendfeedback');
        Route::post('update/{order_id}', 'ordersController@close')->name('admin.order.close');
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', 'admin\rolesController@index')->name('admin.role');
        Route::post('store', 'admin\rolesController@store')->name('admin.role.store');
        Route::get('delete/{role_id}', 'admin\rolesController@delete')->name('admin.role.delete');
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'categoriesController@index')->name('admin.category');
        Route::post('store', 'categoryController@store')->name('admin.category.store');
    });
});

Route::group(['prefix' => 'users'], function () {

});

Route::get('/', 'HomeController@index')->name('users.home');


Auth::routes();

