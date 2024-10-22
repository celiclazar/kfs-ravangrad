<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function fixtureResults()
    {
        return $this->hasMany(FixtureResult::class);
    }

    public function fixtures()
    {
        return $this->belongsToMany(Fixture::class);
    }
}
