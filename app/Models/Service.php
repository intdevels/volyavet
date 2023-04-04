<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'slug',
      'description',
      'image'
    ];

    public function service_children(): HasMany{
        return $this->hasMany(ServiceChildren::class);
    }
}
