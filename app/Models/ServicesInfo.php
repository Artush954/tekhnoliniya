<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesInfo extends Model
{
    protected $table = 'services_info';

    protected $fillable = [
        'title',
        'services_id',
        'image',
        'price',
        'description'
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'services_id', 'id');
    }
}
