<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    protected $fillable = ['league_id', 'player_id', 'points', 'matches_played', 'wins', 'losses', 'goals_for', 'goals_against'];

    public function league()
    {
        return $this->belongsTo(League::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
