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

// Route::get('/', function () {
//     return view('frontend.layouts.master');
// });

Route::get('/', 'Frontend\FrontendController@home');
Route::get('/contact', 'Frontend\FrontendController@contact')->name('contactUs');
Route::get('/blog-single-page', 'Frontend\FrontendController@blogSingle')->name('blog-single-page');
Route::get('/shop-grid', 'Frontend\FrontendController@shopGrid')->name('shop-grid');
Route::get('/cart', 'Frontend\FrontendController@cart')->name('cart');
Route::get('/checkout', 'Frontend\FrontendController@checkout')->name('checkout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catagory', 'CatagoryController@index')->name('catagory');
Route::post('/insert', 'CatagoryController@store')->name('insert');
Route::get('/show', 'CatagoryController@show')->name('show');
Route::get('/delete/{id}', 'CatagoryController@destroy')->name('delete');
Route::get('/edit/{id}', 'CatagoryController@edit')->name('edit');
Route::post('/update/{id}', 'CatagoryController@update')->name('update');
