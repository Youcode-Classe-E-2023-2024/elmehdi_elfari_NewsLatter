<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function show(){
        return view('dashboard');
    }

    public function showSub(){
        return view('subscribe');
    }
}
