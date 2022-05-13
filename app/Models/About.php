<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'images', 'alias'];

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
