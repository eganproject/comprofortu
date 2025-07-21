<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WebPreferences\HeroImagesController;
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

// Start  Dashboard
Route::middleware('auth')->controller(DashboardController::class)->group(function(){
    Route::get('admin', 'index')->name('admin.dashboard');
});
// End Dashboard
// Start Hero
Route::middleware('auth')->controller(HeroImagesController::class)->group(function(){
    Route::get('admin/web-preferences/hero', 'index')->name('admin.web_preferences.hero');
    Route::post('admin/web-preferences/hero', 'store');
    Route::get('admin/web-preferences/hero/create', 'create')->name('admin.web_preferences.hero');
    Route::post('admin/web-preferences/hero/update', 'update');
    Route::get('admin/web-preferences/hero/{id}', 'edit');
    Route::delete('admin/web-preferences/hero/{id}', 'destroy');
});

Auth::routes();

