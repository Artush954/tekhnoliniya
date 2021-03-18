<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use HasSlug;

    protected $table = 'services';

    protected $fillable = [
        'title',
        'image',
        'description',
        'status',
        'slug'
    ];

    public function serviceInfo()
    {
        return $this->hasMany(ServicesInfo::class,'services_id','id');
    }

    /**
     * @return SlugOptions/
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

}
