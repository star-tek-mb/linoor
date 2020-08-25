<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $fillable = [
        'slug', 'title', 'client', 'category_id', 'description', 'begin', 'end'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
