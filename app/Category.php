<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'icon'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
