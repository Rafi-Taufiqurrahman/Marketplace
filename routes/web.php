<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/',[App\Http\Controllers\Frontend\IndexController::class, 'index']);

Auth::routes();

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'role:user'], function(){
    Route::get('dashboard',[App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'role:admin'], function(){
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});
