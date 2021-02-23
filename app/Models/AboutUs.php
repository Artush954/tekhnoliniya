<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table ='about_us';

    protected $fillable = [
        'title',
        'description',
    ];

    public function gallery()
    {
        return $this->hasMany(AboutGallery::class, 'about_id', 'id');
    }
}
