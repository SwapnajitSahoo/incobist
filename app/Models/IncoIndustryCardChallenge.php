<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncoIndustryCardChallenge extends Model
{
     use SoftDeletes;
   protected $fillable = [
        'industry_id',
        'solution_name',
        'img',
        'title',
        'subtitle',
        'desc',
        'is_active'
    ];

    public function industry()
    {
        return $this->belongsTo(IncoIndustry::class, 'industry_id');
    }
}
