<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'category',
        'title',
        'description',
        'hover_category',
        'hover_description',
        'image',
        'status',
        'order_index',
    ];
}
