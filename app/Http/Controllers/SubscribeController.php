<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscribeController extends Controller
{
    public function index(){
        $subscribes = Subscriber::all();
        return view('subscribe',compact('subscribes'));
    }

    public function subscribe() {
        $validated = request()->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);

        Subscriber::create($validated);

        return redirect(route('subscribe.section'));
    }
}
