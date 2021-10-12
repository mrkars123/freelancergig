<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function profiles()
    {
    	// return $this->belongsToMany('App\Profile', 'profile_tag', 'profile_id', 'tag_id');
    	return $this->belongsToMany('App\Profile');
    }
}