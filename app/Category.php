<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug', 'title'
    ];

    public function portfolios() {
        return $this->hasMany('App\Portfolio');
    }
}
