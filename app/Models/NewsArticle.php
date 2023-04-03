<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'title_single',
        'news_id',
        'image',
        'image_single',
        'date_of_publication',
        'sort',
        'description',
    ];
}
