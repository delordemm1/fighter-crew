<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserRegFormController;
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

Route::get('/', function () {
    return inertia('welcome', [
        'laravel' => app()->version(),
        'php' => phpversion(),
    ]);
})->name('welcome');

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('showlogin');
Route::post('/admin/k/login', [AdminController::class, 'login'])->name('login');


// Route::get('/register', [UserRegFormController::class, 'register'])->name('register');
Route::post('/register', [UserRegFormController::class, 'store'])->name('users.store');


Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
