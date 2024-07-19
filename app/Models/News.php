<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'summary',
        'content',
        'author',
        'published_date',
        'category',
        'image_url',
        'views',
        'idLT',
    ];
}
