<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genreM extends Model
{
    use HasFactory;
    protected $table = 'genre';
    protected $primariKey = 'id';
    protected $fillable = [
        'genre'
    ];
}
