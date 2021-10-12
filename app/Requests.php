<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
    public function subcategories()
    {
        return $this->belongsToMany('App\SubCategory')->withTimestamps();
    }
}
