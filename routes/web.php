<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/user/index');
});
Route::get('/about', function () {
    return view('/user/about');
})->name('about');
Route::get('/service', function () {
    return view('/user/service');
})->name('service');
Route::get('/smartos', function () {
    return view('/user/smartos');
})->name('smartos');
Route::get('/product', function () {
    return view('/user/product/index');
})->name('product');
Route::get('/product/show', function () {
    return view('/user/product/show');
})->name('product');
Route::get('/blog', function () {
    return view('/user/blog/index');
})->name('blog');
Route::get('/blog/show', function () {
    return view('/user/blog/show');
})->name('blog');
Route::get('/contact', function () {
    return view('/user/contact');
})->name('contact');
Route::get('/bcap', function () {
    return view('/user/bcap');
})->name('bcap');
Route::get('/career', function () {
    return view('/user/career');
})->name('career');

Route::get('/admin', function () {
    return view('/admin/dashboard/index');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
