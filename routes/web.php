<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\StudyController;
use App\Http\Controllers\Admin\TransactionController;

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
// Route::post('/create-jadwal/{id}', [SuccessController::class, 'createJadwal'])->name('create-jadwal');
Route::get('/success-process/{id}', [SuccessController::class, 'successProcess'])->name('success-process');
Route::get('/success-checkout', [SuccessController::class, 'index'])->name('success-checkout');
Route::get('/register-pengurus', [RegistrasiAdminController::class, 'index'])->name('register-pengurus');
Route::post('/register-admin-process', [RegistrasiAdminController::class, 'process'])->name('register-admin-process');

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
      });