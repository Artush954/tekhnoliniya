<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'slider';

    protected $fillable =[
        'status',
        'position',
        'title',
        'short_text',
        'image'
    ];
}

