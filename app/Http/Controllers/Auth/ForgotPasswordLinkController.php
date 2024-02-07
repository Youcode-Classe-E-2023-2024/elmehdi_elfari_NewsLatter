<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ForgotPasswordLinkController extends Controller
{
    public function show()
    {
        return view('forgot-password');
    }

    public function store(Request $request)
    {
        $user = User::where('email', $request->email);


        if (!is_null($user)) {
            $user->update(['remember_token' => Str::random(40)]);
        } else {
            return redirect()->back()->with('error', "Email not found in the system.");
        }

        // Add any additional logic or redirection you need here
        return redirect()->route('your.desired.route');
    }
}

