<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'rating',
    ];

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
