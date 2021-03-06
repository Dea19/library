<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/books', 'App\Http\Controllers\BooksController@store');
Route::patch('/books/{book}', 'App\Http\Controllers\BooksController@update');
Route::delete('/books/{book}', 'App\Http\Controllers\BooksController@destroy');

Route::post('/author', 'App\Http\Controllers\AuthorsController@store');

Route::post('/checkout/{book}', 'App\Http\Controllers\CheckoutBookController@store');
Route::post('/checkin/{book}', 'App\Http\Controllers\CheckinBookController@store');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
