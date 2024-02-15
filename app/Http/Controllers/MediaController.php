<?php

namespace App\Http\Controllers;

use App\Models\Medias;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::orderBy('created_at', 'desc')->get();
/*        dd($medias);*/
        return view('media', ['templates' => $templates]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $media = Medias::create([
            "user_id" => $userId
        ]);

        $media->addMediaFromRequest('files')->toMediaCollection();
        return back()->with(["status", "success"]);
    }

    public function delete(Template $template)
    {
        $template->delete();
        return redirect()->route('media');
    }

}
