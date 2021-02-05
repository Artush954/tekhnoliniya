<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'key',
        'title',
        'description',
        'meta_keys',
        'meta_desc',
        'image',
    ];

}
