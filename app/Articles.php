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
    
    //模糊查询文章
    public static function articleSearchByKeywords($keywords, $limit=5) {
    	return static::where('title','like','%'.$keywords.'%')->orWhere('content','like','%'.$keywords.'%')->paginate($limit);
    }
    
    //按标签查询文章
    public static function articleSearchByTags($tagId, $limit=5) {
    	return Tags::find($tagId)->articles()->orderBy('published_at', 'DESC')->paginate($limit);
    }
    
}
