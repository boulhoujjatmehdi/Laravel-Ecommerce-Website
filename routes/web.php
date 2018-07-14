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
    return view('section.home');
})->name('home');

Route::get('products', function () {
    return view('section.products');
})->name('section.products');

Route::get('products/{id}', function () {
    return view('section.product');
})->name('section.product');

Route::get('project-members', function () {
    return view('section.members');
})->name('section.members');
    
Auth::routes();
