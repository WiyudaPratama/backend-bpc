<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeGalleryController;
use App\Http\Controllers\RegistrasiAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\StudyController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\GalleryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/checkout/{slug}', [CheckoutController::class, 'index'])->name('checkout');
Route::put('/checkout-jadwal/{id}', [CheckoutController::class, 'updateJadwal'])->name('checkout-jadwal');
Route::get('/checkout-process/{slug}', [CheckoutController::class, 'process'])->name('checkout-process');
Route::get('/success-process/{id}', [SuccessController::class, 'successProcess'])->name('success-process');
Route::get('/success-checkout', [SuccessController::class, 'index'])->name('success-checkout');
Route::get('/register-pengurus', [RegistrasiAdminController::class, 'index'])->name('register-pengurus');
Route::post('/register-admin-process', [RegistrasiAdminController::class, 'process'])->name('register-admin-process');
Route::get('gallery', [HomeGalleryController::class, 'index'])->name('gallery');

Route::prefix('/user')
      ->group(function() {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile-update/{id}', [ProfileController::class, 'update'])->name('profile-update');
      });

Route::prefix('/admin')
      ->middleware(['admin'])
      ->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/admin', AdminController::class);
        Route::resource('/member', MemberController::class);
        Route::resource('/study', StudyController::class);
        Route::resource('/transaction', TransactionController::class);
        Route::get('/profile', [AdminProfileController::class, 'index'])->name('admin-profile');
        Route::put('/profile-update/{id}', [AdminProfileController::class, 'update'])->name('admin-profile-update');
        Route::resource('gallery', GalleryController::class);
      });