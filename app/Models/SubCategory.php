<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasSlug;

    protected $table = 'sub_categories';

    protected $fillable =[
       'title',
       'image',
       'slug',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
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
