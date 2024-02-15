<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Auth.login");
    }

    function authenticate(Request $request) {
        $formFields = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required'
        ]);

        if (auth()->attempt($formFields, $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect('dashboard')->with("login", 'true');
        }
        return back()->withErrors(['email' => 'Invalid Credentials'])
            ->onlyInput();
        /*return view('login');*/
    }
}
