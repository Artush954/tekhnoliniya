<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurWorks extends Model
{
    protected $table = 'our_works';

    protected $fillable = [
        'service_id',
        'image',
    ];

     public function service()
     {
         return $this->belongsTo(Service::class,'service_id','id');
     }
}
