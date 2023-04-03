<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppealVariant extends Model
{
    use HasFactory;

    protected $fillable = [
      'appeal_id',
      'name',
    ];
}
