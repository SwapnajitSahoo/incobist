<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'career_id',
        'first_name',
        'last_name',
        'email',
        'education',
        'experience',
        'phone',
        'state',
        'district',
        'resume',
        'message',
        'status'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
