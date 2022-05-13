<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamService extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price_from', 'price_to', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
