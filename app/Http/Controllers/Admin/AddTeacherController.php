<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AddTeacherController extends Controller
{
    public function addTeacher(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'age' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'age' => $request['age'],
            'role' => $request['role'],
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect or perform other actions as needed
        return redirect()->back()->with('success', 'Add Teacher Successfully');
    }
}
