<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HelpAnimal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function hel_animal_variants():HasMany {
        return $this->hasMany(HelpAnimalVariant::class);
    }
}
