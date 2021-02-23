<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasSlug;

    protected $table = 'categorys';

    protected $fillable =[
        'title',
        'status',
        'slug',
        'image'
    ];
    public function category()
    {
        return $this->hasMany(SubCategory::class,'category_id','id');
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
