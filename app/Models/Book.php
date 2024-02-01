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
        'isbn',
        'publish_year',
        'genre_id',
        'available_quantity',
        'description',
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
