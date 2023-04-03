<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpAnimalVariant extends Model
{
    use HasFactory;

    protected $fillable = [
      'help_animal_id',
      'title',
      'image'
    ];
}
