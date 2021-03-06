<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'img', 'alias'];

    public function products()
    {
        return $this->hasMany(ServiceProduct::class);
    }
}
