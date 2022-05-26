<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StatusLocation extends Model
{
    use HasFactory;

    public function locations(): HasMany
    {
        return $this->hasMany(Location::class);
    }
}
