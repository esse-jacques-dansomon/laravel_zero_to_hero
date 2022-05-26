<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    public function location(): BelongsTo
    {
        return  $this->belongsTo(Location::class);
    }

    public function employee(): BelongsTo
    {
        return  $this->belongsTo(User::class);
    }

}
