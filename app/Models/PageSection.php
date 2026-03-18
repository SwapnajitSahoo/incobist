<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
   protected $fillable = [
        'page_id', 'type', 'content', 'sort_order', 'is_active',
    ];

    protected $casts = [
        'content'   => 'array',   // auto encode/decode JSON
        'is_active' => 'boolean',
    ];

    public function page()
    {
        return $this->belongsTo(PageContent::class, 'page_id');
    }
}
