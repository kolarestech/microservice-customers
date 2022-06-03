<?php

use App\Http\Controllers\CreatorController;
use Illuminate\Support\Facades\Route;

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

Route::get('creators', [CreatorController::class, 'index']);
Route::post('creators', [CreatorController::class, 'store']);
Route::get('creators/{identify}', [CreatorController::class, 'show']);
Route::put('creators/{identify}', [CreatorController::class, 'update']);
Route::delete('creators/{identify}', [CreatorController::class, 'destroy']);

