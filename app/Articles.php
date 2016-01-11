<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //
    protected $fillable = ['title', 'content', 'published_at'];
    
    public function tags() {
    	return $this->belongsToMany('App\Tags', 'articlesMapTags');
    }
    
}
