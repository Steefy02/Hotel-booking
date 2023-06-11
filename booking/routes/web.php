<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientPagesController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;

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
Route::get('/register', [CustomAuthController::class, 'get_register'])->name('register');
Route::get('/forgotPassword', [CustomAuthController::class, 'forgot_password'])->name('forgotPassword');
Route::get('/account', [CustomAuthController::class, 'get_account'])->name('account');
Route::get('/settings', [CustomAuthController::class, 'get_settings'])->name('settings');
Route::get('/db', [ClientPagesController::class, 'db_test'])->name('db_test');
Route::get('/terms', [ClientPagesController::class, 'get_terms'])->name('terms');
Route::get('/contact', [ClientPagesController::class, 'get_contact'])->name('contact');
Route::get('/room', [ClientPagesController::class, 'get_room'])->name('room');
Route::get('/checkout', [ClientPagesController::class, 'get_checkout'])->name('checkout');

//Auth
Route::post('login',[CustomAuthController::class,'process_login'])->name('loginPost');
Route::post('register',[CustomAuthController::class,'process_register'])->name('registerPost');
Route::post('logout', [CustomAuthController::class, 'logout'])->name('logout');

//Admin
Route::get('/admin', [AdminController::class, 'get_admin_dashboard'])->name('admin-home');
Route::get('/admin/users', [AdminController::class, 'get_users_page'])->name('admin-users');
Route::get('/admin/users/{id}', [AdminController::class, 'get_users_edit_page'])->name('admin-users-edit');
Route::post('/admin/users/update/{id}', [AdminController::class, 'edit_user'])->name('admin-edit-user-post');
Route::get('/admin/rooms', [AdminController::class, 'get_rooms_page'])->name('admin-rooms');
Route::get('/admin/rooms/{id}', [AdminController::class, 'get_room_edit_page'])->name('admin-rooms-edit');
Route::post('/admin/rooms/update/{id}', [AdminController::class, 'edit_room'])->name('admin-edit-room-post');
Route::get('/admin/bookings', [AdminController::class, 'get_bookings_page'])->name('admin-bookings');
Route::get('/admin/packages', [AdminController::class, 'get_packages_page'])->name('admin-packages');
Route::get('/admin/specials', [AdminController::class, 'get_specials_page'])->name('admin-specials');
