<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavbarMenu extends Model
{
     protected $fillable = [
        'title',
        'slug',
        'url',
        'parent_id',
        'menu_order',
        'target',
        'icon',
        'is_active'
    ];
    public function children()
    {
        return $this->hasMany(NavbarMenu::class, 'parent_id')->orderBy('menu_order');
    }

    public function parent()
    {
        return $this->belongsTo(NavbarMenu::class, 'parent_id');
    }

     // THIS was missing — fixes the error
    public function pageContent()
    {
        return $this->hasOne(PageContent::class, 'menu_id');
    }
}
