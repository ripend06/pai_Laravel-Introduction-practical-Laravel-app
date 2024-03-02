<?php

Route::get('/shops', 'ShopController@index')->name('shop.list');
Route::get('/shop/new', 'ShopController@create')->name('shop.new');
Route::post('/shop', 'ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}', 'ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}', 'ShopController@update')->name('shop.update');

Route::get('/shop/{id}', 'ShopController@show')->name('shop.detail');
Route::delete('/shop/{id}', 'ShopController@destroy')->name('shop.destroy');

Route::get('/', function () {
    return redirect('/shops');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
