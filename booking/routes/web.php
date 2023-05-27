<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientPagesController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Client pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [CustomAuthController::class, 'get_login'])->name('login');
Route::get('/register', [CustomAuthController::class, 'get_registration'])->name('register');
Route::get('/db', [ClientPagesController::class, 'db_test'])->name('db_test');

//Auth
Route::post('loginUser',[CustomAuthController::class,'process_login'])->name('loginPost');
Route::post('register',[CustomAuthController::class,'process_registration'])->name('register');
Route::post('logout', [CustomAuthController::class, 'logout'])->name('logout')->middleware('auth');

