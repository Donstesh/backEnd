<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'desc',
    ];
}
