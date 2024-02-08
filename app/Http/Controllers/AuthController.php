<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    private $redirectTo;

    public function register(){
        return view('register');
    }


    public function store(Request $request){

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

    }

    public function login(){
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => ["request","string"],
            'password'=> ["request","string"],
        ]);

        if(Auth::guard("admin")->attempt($request->only('email','password'))) {
            return redirect('/dashboard')->intended($this->redirectTo);
        }else{

           // return redirect()->back()->withInput(['email'=> $request->email])->withErrors(['errorResponse'=> 'these credentials do not match our records']);
            return redirect()->route('welcome');

        }

    }
}
