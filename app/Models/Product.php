<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
