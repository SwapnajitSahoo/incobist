<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsightBlog extends Model
{
    protected $fillable = ['name', 'slug', 'image', 'content', 'is_active'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = \Illuminate\Support\Str::slug($blog->name);
            }
        });
    }
}
