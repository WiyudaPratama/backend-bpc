<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController;

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
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/success', [SuccessController::class, 'index'])->name('success');

Route::prefix('/user')
      ->group(function() {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile-update/{id}', [ProfileController::class, 'update'])->name('profile-update');
      });

Route::prefix('/admin')
      ->middleware(['admin'])
      ->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/member', MemberController::class);
      });