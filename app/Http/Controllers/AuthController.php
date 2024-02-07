<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register(){
        return view('register');
    }


    public function registerPost(Request $request){

        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return back()->with('success', 'Registration successful');
        return view('register');
    }

    public function login(){
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $data=[
            'email' => $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect('/dashboard')->with('success','Good job');

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials, $request->filled('remember'))) {
                $request->session()->regenerate();

                return redirect()->intended('/');
            }

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


}
