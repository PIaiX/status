<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'alias', 'short_desc', 'full_desc', 'volume', 'price', 'img', 'category_id', 'brand_id', 'hair_type_id', 'is_new'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function hairType()
    {
        return $this->belongsTo(HairType::class);
    }

    public function getPriceForCount()
    {
        if (!is_null($this->pivot)) {
            return $this->pivot->count * $this->price;
        }
        return $this->price;
    }

    public function isNew()
    {
        return $this->new === 1;
    }
}
