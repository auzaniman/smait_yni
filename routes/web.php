<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SMAITController;
use Illuminate\Support\Facades\Route;
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

// Yayasan
Route::get('/', function () {
    return view('user_view.pages.smait.home');
  })->name('home');

// PPDB Form
Route::resource('ppdb_smait', SMAITController::class);

// Admin
// Route::prefix('admin')
// ->namespace('Admin')
// ->middleware(['auth', 'admin'])
// ->group(function() {

//   // Dashboard
//   Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//   // Table
//   Route::get('/kbit', [AdminController::class, 'kbit'])->name('kbit');

//   Route::get('/tkit1', [AdminController::class, 'tkit1'])->name('tkit1');

//   Route::get('/tkit2', [AdminController::class, 'tkit2'])->name('tkit2');

//   Route::get('/sdit', [AdminController::class, 'sdit'])->name('sdit');

//   Route::get('/smpit', [AdminController::class, 'smpit'])->name('smpit');

//   Route::get('/smait', [AdminController::class, 'smait'])->name('smait');
// });

// Auth::routes();
