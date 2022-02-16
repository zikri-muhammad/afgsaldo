<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Landing\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

// start route landing


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');


// end route landing

// start route admin

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

// end route admin