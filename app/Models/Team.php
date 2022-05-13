<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'profession', 'experience', 'rating', 'short_desc', 'desc', 'qualification', 'img'];

    public function childServices()
    {
        return $this->hasMany(TeamService::class, 'team_id');
    }
}
