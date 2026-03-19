<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'page_title','heading','heading_subtitle',
        'lending_title','lending_desc',
        'social_linked_link','social_twitter_link',
        'social_insta_link','social_fb_link',
        'social_wp_link','tel_num','slug','is_active'
    ];

    public function cards()
    {
        return $this->hasMany(IndustryCard::class);
    }

    public function services()
    {
        return $this->hasMany(IndustryService::class);
    }
}
