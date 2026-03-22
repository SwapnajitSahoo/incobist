<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncoIndustryCard extends Model
{
      use SoftDeletes;
    protected $fillable = [
        'industry_id',
        'img',
        'title',
        'subtitle',
        'desc',
        'card_link',
        'type',
        'is_active'
    ];
      public static array $types = ['serve', 'focus', 'service'];

    public function industry()
    {
        return $this->belongsTo(IncoIndustry::class, 'industry_id');
    }
}
