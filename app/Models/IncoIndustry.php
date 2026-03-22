<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncoIndustry extends Model
{
  use SoftDeletes;
    protected $fillable = [
            'nav_menu_id',
            'type',
            'page_title',
            'page_img',
            'heading',
            'heading_subtitle',
            'lending_title',
            'lending_desc',
            'linkedin_link',
            'twitter_link',
            'instagram_link',
            'fb_link',
            'wp_link',
            'tel_no',
            'is_active'
        ];

        public static array $types = ['serve', 'focus', 'service'];
    

     // 🔗 belongs to navbar menu
    public function navbarMenu()
    {
        return $this->belongsTo(NavbarMenu::class, 'nav_menu_id');
    }

    // 🔗 cards
    public function cards()
    {
        return $this->hasMany(IncoIndustryCard::class, 'industry_id');
    }

    // 🔗 challenges
    public function challenges()
    {
        return $this->hasMany(IncoIndustryCardChallenge::class, 'industry_id');
    }
}
