<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'content',
        'slug',
        'user_id',
        'category_id',
        'is_published',
        'published_at',
        'view_count',
        'comment_count',
        'status',
        'meta_title',
        'meta_description',
    ];
}
