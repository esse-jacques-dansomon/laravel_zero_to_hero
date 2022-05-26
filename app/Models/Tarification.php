<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tarification extends Model
{
    use HasFactory;

    public function dureeLocation() : BelongsTo
    {
        return $this->belongsTo(DureeLocation::class, 'duree_location_id');
    }

    public function article() : BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

}
