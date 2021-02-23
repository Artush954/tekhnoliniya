<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutGallery extends Model
{
    protected $table ='about_gallery';

    protected $fillable =[
        'about_id',
        'image',
    ];
}
