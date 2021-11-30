<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;

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

// お問い合わせフォーム
Route::prefix('contact')->group(function (){
    Route::get('/',  [ContactController::class, 'index']);
    Route::post('/confirm',  [ContactController::class, 'confirm']);
    Route::post('/create',  [ContactController::class, 'create']);
});

// 管理システム
Route::prefix('management')->group(function (){
    Route::get('/',  [ManagementController::class, 'management']);
    Route::get('/search',  [ManagementController::class, 'search']);
    Route::post('/delete',  [ManagementController::class, 'delete']);
});