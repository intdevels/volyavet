<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
     'title',
     'title_library'
    ];


    public function news_videos():HasMany {
        return $this->hasMany(NewsVideo::class);
    }

    public function news_articles():HasMany {
        return $this->hasMany(NewsArticle::class);
    }
}
