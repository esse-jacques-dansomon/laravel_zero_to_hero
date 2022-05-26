<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Expr\CallLike;

class Location extends Model
{
    use HasFactory;

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function statusLocation(): BelongsTo
    {
        return $this->belongsTo(StatusLocation::class, 'status_location_id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::Class);
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::Class);
    }


}
