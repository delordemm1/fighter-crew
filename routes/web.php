<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return inertia('welcome', [
        'laravel' => app()->version(),
        'php' => phpversion(),
    ]);
});

Route::get('/admin/login', function () {
    return inertia('admin_login');
});

Route::get('/register', function () {
    return inertia('landing');
});

Route::get('/admin/dashboard', function () {
    return inertia('admin_dashboard');
});
