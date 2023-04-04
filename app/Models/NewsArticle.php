<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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


    public function getDateOfPublicationAttribute(){
        return Carbon::parse($this->attributes['date_of_publication'])->format('d.m.Y');
    }


    public function news():BelongsTo {
        return $this->belongsTo(News::class);
    }
}
