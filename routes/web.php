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
    return view('home');
});

Route::get('/home', [App\Http\Controllers\home1::class, 'index'])
    ->name('home');


Route::get('/about', [App\Http\Controllers\about::class, 'index'])
->name('about');

Route::get('/product', [App\Http\Controllers\product::class, 'index'])
->name('product');

Route::get('/testimonial', [\App\Http\Controllers\testimonial::class, 'index'])
->name('testimonial');

