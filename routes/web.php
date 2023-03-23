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
    return redirect()->route('login');
});

Auth::routes();

Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('/spinner', 'App\Http\Controllers\SpinnerController');
    Route::resource('/subscriber', 'App\Http\Controllers\SubscriberController');
    Route::Post('/store/spinner', 'App\Http\Controllers\SpinnerController@CreateSpinner')->name('AddSpinner');
    Route::Put('/change-password', 'App\Http\Controllers\PasswordController@updatePassword')->name('change-password');
    Route::resource('/setting', 'App\Http\Controllers\PasswordController');
});
