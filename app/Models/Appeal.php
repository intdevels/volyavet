<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appeal extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'description',
      'image',
    ];


    public function appeal_variants():HasMany {
        return $this->hasMany(AppealVariant::class);
    }
}
