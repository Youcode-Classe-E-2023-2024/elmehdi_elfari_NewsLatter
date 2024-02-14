<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function show(){
        return view('dashboard');
    }

    public function showTemplate(){
        return view('template');
    }
}
