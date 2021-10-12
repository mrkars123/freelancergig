<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = [
        'user_id'
    ];


    public function tags()
    {
    	return $this->belongsToMany('App\Tag', 'profile_tag', 'profile_id', 'tag_id');
    }
    
   public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}