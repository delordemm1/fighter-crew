<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function authenticate(Request $request)
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
    // public function admindashboard() {
    //     return view('admin_dashboard');
    // } 
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return response()->json(['message' => 'success']);

    }
}
