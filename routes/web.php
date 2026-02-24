<?php

use Illuminate\Support\Facades\Route;

$controller = 'App\Http\Controllers\ReviewController@';

Route::get('/', $controller . 'home')->name('home.index'); //home
Route::get('/reviews', $controller . 'index')->name('review.index'); //shows us a list with all the reviews created
Route::get('/reviews/create', $controller . 'create')->name('review.create'); //create a review
Route::post('/reviews/store', $controller . 'store')->name('review.store'); //The browser sends the form data
Route::get('/reviews/{id}', $controller . 'show')->name('review.show'); //shows us the information from a single review
Route::delete('/reviews/{id}', $controller . 'destroy')->name('review.destroy'); //A review is removed from the database
