<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
	protected $fillable = ['tag_name', 'use_nums'];
	
    public function articles() {
    	return $this->belongsToMany('App\Articles', 'articlesMapTags');
    }
}
