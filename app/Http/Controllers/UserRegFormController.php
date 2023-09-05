<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegForm;


class UserRegFormController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'age' => 'required|'
        ]);

        UserRegForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' =>  $request->age
        ]);
        return response()->json(['message' => 'Form data submitted successfully']);
    }

    public function getUsers()
    {
        $users = UserRegForm::orderBy('id', 'ASC')->get();
        $totalEntries = UserRegForm::count();

        return response()->json(['users' => $users, 'totalEntries' => $totalEntries]);
    }
}
