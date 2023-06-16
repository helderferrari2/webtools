<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

/**
 * Index
 */
Route::get('/', [DashboardController::class, 'index'])->name('index');

/**
 * Dashboard Layout
 */
Route::get('/{page}', [DashboardController::class, 'page'])->name('page');
Route::post('/action', [DashboardController::class, 'action'])->name('action');