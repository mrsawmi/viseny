<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = "category_id";
    protected $guarded = [
        'category_id'
    ];

    public function products()
    {
        return $this->
        belongsToMany(tablo::class, 'category_product', 'category_id', 'product_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function tablos()
    {
        return $this->belongsTo(Role::class, 'user_group');
    }
}
