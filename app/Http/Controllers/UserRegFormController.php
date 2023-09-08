<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegForm;
use Inertia\Inertia;



class UserRegFormController extends Controller
{
    // public function store(Request $request) {
    //     $request->validate([
    //         'name' => 'required|string|max:250',
    //         'email' => 'required|email|max:250|unique:users',
    //         'age' => 'required|'
    //     ]);

    //     UserRegForm::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'age' =>  $request->age
    //     ]);
    //     return response()->json(['message' => 'Form data submitted successfully']);
    // }

    // public function getUsers()
    // {
    //     $users = UserRegForm::orderBy('id', 'ASC')->get();
    //     $totalEntries = UserRegForm::count();

    //     return response()->json(['users' => $users, 'totalEntries' => $totalEntries]);
    // }

    // public function register()
    // {
    //     return Inertia::render('landing', [
    //       'users' => UserRegForm::all(),
    //     ]);
    // }
    //   public function register()
    // {
    //     return Inertia::render('landing');
    // }

    public function store(Request $request)
    {
        UserRegForm::create($request->validate([
            'firstName' => ['required', 'max:50'],
            'lastName' => ['required', 'max:50'],
            'age' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email'],
        ]));

        return to_route('welcome')->with('message', 'Account Successfully Registered');
    }
}
