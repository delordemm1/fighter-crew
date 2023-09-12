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
    return inertia('welcome');
})->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');
});

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login']);

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('logout');


Route::post('/register', [UserRegFormController::class, 'store'])->name('users.store');

Route::any('/{any}', function () {
    return redirect()->route('welcome');
})->where('any', '.*');