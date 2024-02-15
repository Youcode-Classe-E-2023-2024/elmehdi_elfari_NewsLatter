<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use App\Models\Subscriber;
use App\Models\Template;

class DashboardController extends Controller
{


    public function index(){
        $subscribe = Subscriber::all()->count();
        $template = Template::all()->count();
        $media = Medias::all()->count();
        return view('dashboard',compact('subscribe','template'));
    }

}
