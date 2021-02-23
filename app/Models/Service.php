<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
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

}
