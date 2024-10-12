<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixtureResult extends Model
{
    use HasFactory;

    protected $fillable = ['fixture_id', 'player_id', 'partner_id', 'score_for', 'score_against'];

    public function fixture()
    {
        return $this->belongsTo(Fixture::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function partner()
    {
        return $this->belongsTo(Player::class, 'partner_id');
    }
}
