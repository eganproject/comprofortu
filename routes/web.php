<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'user.index')->name('home');
Route::view('/about', 'user.about')->name('about');
Route::view('/service', 'user.service')->name('service');
Route::view('/smartos', 'user.smartos')->name('smartos');
Route::view('/contact', 'user.contact')->name('contact');
Route::view('/bcap', 'user.bcap')->name('bcap');
Route::view('/career', 'user.career')->name('career');

Route::prefix('product')->name('product.')->group(function () {
    Route::view('/', 'user.product.index')->name('index'); 
    Route::view('/show', 'user.product.show')->name('show'); 
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::view('/', 'user.blog.index')->name('index'); 
    Route::view('/show', 'user.blog.show')->name('show'); 
});

Route::get('/admin', function () {
    return view('/admin/dashboard/index');
})->name('dashboard')->middleware('auth');

Auth::routes();

