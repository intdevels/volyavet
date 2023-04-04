<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'news_id',
        'video',
        'date_of_publication',
        'sort'
    ];


    public function getDateOfPublicationAttribute(){
        return Carbon::parse($this->attributes['date_of_publication'])->format('d.m.Y');
    }
}
