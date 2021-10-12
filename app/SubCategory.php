<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
	protected $table='sub_categories';

	protected $fillable = [
        'cat_id', 'sub_cat'
    ];

    public function categories(){
     	return $this->belongsTo(Category::class,'cat_id','id');
     	//return $this->belongsToMany('App\Category')->withTimestamps();
    }
}
