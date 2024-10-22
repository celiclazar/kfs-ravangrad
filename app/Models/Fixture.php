<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    use HasFactory;

    protected $fillable = ['week_id', 'result_team_1', 'result_team_2'];

    public function week(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Week::class);
    }

    public function results()
    {
        return $this->hasMany(FixtureResult::class);
    }

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }
}
