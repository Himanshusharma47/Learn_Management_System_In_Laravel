<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthLoginController extends Controller
{
    public function signinData( Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('name', 'email', 'password');
        $user = User::where('email', $credentials['email'])->get();

        if (Auth::guard('web')->attempt($credentials)) {

            $user = Auth::guard('web')->user();

            if ($user->role === 'super_admin') {

                return redirect('/admin-profile');
            } elseif ($user->role === 'teacher') {

                return redirect('/teacher-profile');
            }
        }

        return redirect()->back()->with('error', 'fill right details');
    }

    public function signupData( Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role' => 'required',
            'age' => 'required|integer|between:18,60',
            'course' => 'required',
        ]);

        // dd($vali);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => $request->input('role'),
            'age' => $request->input('age'),
            'course' => $request->input('course'),
        ]);


        if($user)
        {
            return redirect()->back()->with('success', ' registration successful, Please Login');
        }
        else
        {
            return redirect()->back()->with('error', ' registration not successfull');
        }

        return redirect()->back()->with('error', ' registartion error ');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
