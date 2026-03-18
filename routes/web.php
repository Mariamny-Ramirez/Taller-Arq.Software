<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\OrderController@home');
Route::get('/orders', 'App\Http\Controllers\OrderController@home')->name('order.home');
Route::get('/orders/list', 'App\Http\Controllers\OrderController@index')->name('order.list');
Route::get('/orders/create', 'App\Http\Controllers\OrderController@create')->name('order.create');
Route::post('/orders/save', 'App\Http\Controllers\OrderController@save')->name('order.save');
Route::get('/orders/{id}', 'App\Http\Controllers\OrderController@show')->name('order.show');
Route::get('/orders/delete/{id}', 'App\Http\Controllers\OrderController@delete')->name('order.delete');
