<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function standings()
    {
        return $this->hasMany(Standing::class);
    }

    public function weeks()
    {
        return $this->hasMany(Week::class);
    }
}
