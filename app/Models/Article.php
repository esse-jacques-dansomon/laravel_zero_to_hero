<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Type;

class Article extends Model
{
    use HasFactory;
    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeArticle::class, 'type_article_id', 'id');
    }

    public  function  tarifications() : HasMany
    {
        return $this->hasMany(Tarification::class);
    }

    public  function locations(): BelongsToMany
    {
        return  $this->belongsToMany(Location::class, 'article_location', 'article_id', 'location_id');
    }

    public  function proprieties(): BelongsToMany
    {
        return  $this->belongsToMany(ProprieteArticle::class, 'article_location', 'article_id', 'propriete_article_id');
    }
}
