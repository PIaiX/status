<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProduct extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'price', 'alias', 'sub_service', 'images', 'service_id', 'service_title'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function getMultipleImages($images)
    {
        $splittedImages = explode('|', $images);
        $imgs = [];

        foreach($splittedImages as $img) {
            if ($img == '') continue;
            $imgs[] = $img;
        }

        return $imgs;
    }
}
