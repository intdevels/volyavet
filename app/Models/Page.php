<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'section_title',
      'seo_title'
    ];


    public function scopeSection(Builder $query,string $page,string $section_name): void
    {
        $query->where('name', $page)
              ->where('section_name',$section_name);
    }
}
