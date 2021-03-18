<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasSlug;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'sub_category_id',
        'price',
        'status',
        'color_price',
        'size_id',
        'amount',
        'image',
        'marka',
    ];

    /**
     * @return SlugOptions/
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function SubCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
    public function Size()
    {
        return $this->belongsTo(Size::class, 'size_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }
}
