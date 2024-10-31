<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\superAdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[dashboardController::class,'index']);
    Route::middleware([superAdminMiddleware::class])->name('superadmin.')->prefix('superadmin')->group(function () {
        Route::resource('user', UserController::class);

    });
    
    //
    // Route::middleware([AdminMiddleware::class])->name('admin.')->prefix('admin')->group(function () {

    // });
});