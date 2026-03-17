<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
     protected $fillable = [
        'page_id', 'meta_title', 'meta_description', 'og_image', 'canonical_url',
    ];

    public function page()
    {
        return $this->belongsTo(PageContent::class, 'page_id');
    }
}
