<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    
	protected $fillable = [
        'cat_name', 'slug'
    ];

    public function subcategories(){
     	return $this->hasMany(SubCategory::class);
        //return $this->belongsToMany('App\SubCategory')->withTimestamps();
    }

}
