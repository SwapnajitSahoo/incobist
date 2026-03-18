<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotentialRoi extends Model
{
    protected $fillable = ['industry', 'budget', 'goal', 'business_stage', 'timeline'];
}
