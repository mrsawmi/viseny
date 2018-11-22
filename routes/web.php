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
        Route::get('/admins', 'admin\UsersController@listOfAdmins')->name('admin.admins');
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
        Route::post('showFile/{ticket_id}', 'ticketController@showFile')->name('file.show');
        Route::get('/review/{ticket_id}', 'ticketController@ticketReview')->name('ticket.review');
    });
    Route::group(['prefix' => 'order'], function () {
        Route::get('/', 'ordersController@index')->name('admin.order');
        Route::post('store', 'ordersController@store')->name('admin.order.store');
        Route::get('delete/{order_id}', 'ordersController@answer')->name('admin.order.delete');
        Route::post('/store/{order_id}', 'ordersController@confirm')->name('admin.order.confirm');
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
    Route::group(['prefix' => 'comment'], function () {
        Route::get('/', 'commentsController@index')->name('admin.comment');
        Route::post('/product/store', 'commentsController@store')->name('admin.comment.store');
        Route::get('/product/delete/{comment_id}', 'commentsController@delete')->name('admin.comment.delete');
        Route::post('/product/confirm/{comment_id}', 'commentsController@confirm')->name('admin.comment.confirm');
    });
    Route::group(['prefix' => 'factor'], function () {
        Route::get('/', 'admin\FactorController@index')->name('admin.factor');
        Route::post('/{factor_id}', 'admin\FactorController@confirm')->name('admin.factor.confirm');
    });
    Route::group(['prefix' => 'faq'], function () {
        Route::get('/', 'admin\FaqController@adminIndex')->name('admin.faq');
        Route::get('/create', 'admin\FaqController@adminCreate')->name('admin.faq.create');
        Route::post('/store', 'admin\FaqController@adminStore')->name('admin.faq.store');
        Route::get('/delete/{faq_id}', 'admin\FaqController@delete')->name('admin.faq.delete');
        Route::get('/usersQuestions', 'admin\FaqController@usersQuestions')->name('admin.faq.users');
        Route::post('/answer/{faq_id}', 'admin\FaqController@answer')->name('admin.faq.answer');
        Route::post('/answer/send/{faq_id}', 'admin\FaqController@sendAnswer')->name('admin.faq.sendAnswer');
    });
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/{user_id}', 'admin\UsersController@profile')->name('users.profile.account');
    Route::post('/{user_id}/update', 'admin\UsersController@updateProfile')->name('users.profile.account.update');
    Route::get('/{user_id}/orders', 'admin\UsersController@profileOrders')->name('users.profile.orders');
    Route::get('/{user_id}/addresses', 'admin\UsersController@profileAddresses')->name('users.profile.addresses');
    Route::post('/{user_id}/addresses/update', 'admin\UsersController@updateAddress')->name('users.profile.addresses.update');
    Route::get('/{user_id}/favorites', 'admin\UsersController@profileFavorites')->name('users.profile.favorites');
    Route::get('/{user_id}/tickets', 'admin\UsersController@profileTickets')->name('users.profile.tickets');
    Route::get('/{user_id}/tickets/new', 'ticketController@usersNewTicket')->name('users.profile.tickets.new');
    Route::post('/{user_id}/tickets/new/send', 'ticketController@usersTicketStore')->name('users.profile.tickets.send');
});

/* Ecommerce */
Route::group(['prefix' => 'basket', 'namespace' => 'Ecommerce'], function () {
    Route::get('/', ['as' => 'basket', 'uses' => 'BasketController@index']);
    Route::post('/', ['as' => 'basket', 'uses' => 'BasketController@update']);
    Route::any('add', ['as' => 'basket.item.add', 'uses' => 'BasketController@add']);
    Route::get('{id}/remove', ['as' => 'basket.item.remove', 'uses' => 'BasketController@delete']);
    Route::get('{id}/inc', ['as' => 'basket.item.inc', 'uses' => 'BasketController@inc']);
    Route::get('{id}/dec', ['as' => 'basket.item.dec', 'uses' => 'BasketController@dec']);
    Route::get('destroy', ['as' => 'basket.destroy', 'uses' => 'BasketController@destroy']);
    Route::get('debug', ['as' => 'basket.debug', 'uses' => 'BasketController@debug']);
    Route::get('demo', ['as' => 'basket.demo', 'uses' => 'BasketController@demo']);
});

Route::group(['prefix' => 'VisenyTeam'], function () {
    Route::get('/', 'admin\tabloController@team')->name('visenyteam');
//    Route::get('/{id}','admin\UsersController@')->name('visenyteam.user');
});

Route::group(['prefix' => 'faq'], function () {
    Route::get('/', 'admin\FaqController@index')->name('users.faq');
    Route::post('/store', 'admin\FaqController@store')->name('users.faq.store');
});

Route::group(['prefix' => 'product', 'namespace' => 'Ecommerce'], function () {
    Route::get('/', ['as' => 'product.index', 'uses' => 'ProductController@index']);
    Route::get('items', ['as' => 'product.items', 'uses' => 'ProductController@items']);
    Route::get('item/{id}', ['as' => 'product.item', 'uses' => 'ProductController@item'])->where('id', '[0-9]+');
});

Route::get('/', 'admin\tabloController@customer')->name('users.home');
Route::get('/product/{tablo_id}', 'admin\tabloController@singleProduct')->name('products.single');
Route::get('/contact', 'admin\tabloController@contactUs')->name('contactus');
Route::get('/about', 'admin\tabloController@about')->name('about');
Route::post('register/store', 'Auth\RegisterController@create')->name('register.store');
Auth::routes();

