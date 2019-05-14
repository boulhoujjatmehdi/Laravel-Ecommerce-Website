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

Route::get('products', [
    'uses' =>  'ProductController@getIndex',
    'as' => 'section.products'
]);

Route::get('products/{id}', [
    'uses' => 'ProductController@getProduct',
    'as' => 'section.product'
]);

Route::post('products/{id}/review',[
    'uses' =>  'ProductController@postWriteReview',
    'as' => 'write',
    'middleware' => 'auth'
]);

Route::get('cart',function(){
    return view('section.cart');
})->name('cart');

Route::get('products/{id}/addtocart', [
    'uses' => 'ProductController@addToCart',
    'as' => 'addtocart'
]);

Route::get('products/{id}/remove', [
    'uses' => 'ProductController@removeFromCart',
    'as' => 'remove'
]);

Route::get('checkout',function(){
    return view('section.checkout');
})->name('checkout');

Route::get('project-members', function () {
    return view('section.members');
})->name('section.members');

Auth::routes();
