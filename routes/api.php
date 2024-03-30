<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/submit-reading-interval', 'ReadingIntervalController@store');
Route::get('/recommended-books', 'RecommendedBooksController@index');