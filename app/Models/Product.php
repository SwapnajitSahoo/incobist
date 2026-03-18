<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'heading', 'slug', 'image', 'content', 'is_active'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            if (empty($product->slug)) {
                $product->slug = \Illuminate\Support\Str::slug($product->name);
            }
        });
    }
}
