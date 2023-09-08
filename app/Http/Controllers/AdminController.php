<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserRegForm;
use Inertia\Inertia;
use App\Http\Requests\Auth\LoginRequest;

class AdminController extends Controller
{
    public function showLoginForm () 
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return Inertia::render('admin/login');
    }

    public function login(LoginRequest $request)
    {
        
        $request -> authenticate();
        $request -> session() -> regenerate();
        return redirect ('/admin/dashboard');
    }
    public function admindashboard()
    {
        $users = UserRegForm::all();
    
        return Inertia::render('admin/dashboard', [
            'users' => $users
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
