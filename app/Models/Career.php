<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
        'title',
        'category',
        'location',
        'type',
        'positions',
        'description',
        'status',
        'posted_at'
    ];
}
