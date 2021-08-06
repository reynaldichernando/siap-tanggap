<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\VaccinationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/vaccination', [VaccinationController::class, 'index'])->name('vaccination');

Route::get('/discussion', [PostController::class, 'index'])->name('post');
Route::post('/discussion', [PostController::class, 'store'])->name('post.store');
Route::get('/discussion/{post}', [PostController::class, 'show'])->name('post.show');

Route::post('/discussion/{post}/replies', [ReplyController::class, 'store'])->name('reply.store');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

Auth::routes([
    'reset' => false
]);
