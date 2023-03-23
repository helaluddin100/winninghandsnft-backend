<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Spinner;
use App\Http\Controllers\SpinnerController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\SubscriberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//FRONTEND API ROUTES
Route::post('spinner', [SpinnerController::class, 'store']);
Route::get('spinner/get', [SpinnerController::class, 'TotalSpinners']);
Route::post('visitors', [VisitorController::class, 'store']);
Route::post('subscriber', [SubscriberController::class, 'store']);
Route::get('all/spin', [SpinnerController::class, 'index']);
Route::get('all/spin/count', [SpinnerController::class, 'countSpinners']);