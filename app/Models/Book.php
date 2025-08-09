<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'added_by',
        'description',
        'publication_year',
        'genre'
    ];

    protected $casts = [
        'publication_year' => 'integer',
    ];
}
