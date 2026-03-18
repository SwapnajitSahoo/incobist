<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = [
        'menu_id', 'page_title', 'layout', 'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function menu()
    {
        return $this->belongsTo(NavbarMenu::class, 'menu_id');
    }

    public function sections()
    {
        return $this->hasMany(PageSection::class, 'page_id')->orderBy('sort_order');
    }

    public function seoMeta()
    {
        return $this->hasOne(SeoMeta::class, 'page_id');
    }
}
