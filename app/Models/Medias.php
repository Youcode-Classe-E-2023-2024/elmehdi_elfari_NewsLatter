<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Medias extends Model implements HasMedia
{
    use InteractsWithMedia;

    public $fillable = [
        "user_id"
    ];


}
