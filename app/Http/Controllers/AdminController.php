<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserRegForm;
use Inertia\Inertia;


class AdminController extends Controller
{
    public function showLoginForm () 
    {
        return Inertia::render('admin/login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user->password)) {
                Auth::login($user);

                // return redirect('/admin/dashboard');
                return response()->json(['message' => 'success']);
        } else {
            return response()->json(['message' => 'wrong details']);
        }
    } else {
        return response()->json(['message' => 'wrong details']);
    }
    }
   
    public function AdminDashboard(UserRegForm $user)
    {
        return Inertia::render('admin/dashboard', [
          'users' => $user
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->json(['message' => 'success']);

    }
}
