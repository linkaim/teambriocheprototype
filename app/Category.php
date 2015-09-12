<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategories()
    {
        return $this->belongsToMany('App\Subcategory')->withTimestamps();
    }

    public function products() // get articles associated with the given tag
    {
        return $this->belongsToMany('App\Product');
    }
}
