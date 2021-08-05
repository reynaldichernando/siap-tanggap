<?php

use App\Http\Controllers\Api\V1\NewsController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\StatisticController;
use Illuminate\Http\Request;
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

Route::group(['prefix' => '/v1'], function() {
    Route::get('/posts', [PostController::class, 'index'])->name('api.posts');
    Route::get('/statistics', [StatisticController::class, 'index'])->name('api.statistics');
});
