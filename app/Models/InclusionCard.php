<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InclusionCard extends Model
{
    protected $fillable = [
        'title',
        'content',
        'second_content',
        'is_active',
        'sort_order',
    ];
}
