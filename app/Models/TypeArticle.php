<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeArticle extends Model
{
    use HasFactory;
    protected $table = 'type_articles';
    protected $primaryKey = 'propriete_article_id';

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function attributes(): HasMany
    {
        return $this->hasMany(ProprieteArticle::class);
    }
}
