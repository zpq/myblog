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
    
    public static function getTagsOfStringWay($id) {
    	$str = '';
    	$tags = static::find($id)->tags;
    	if(isset($tags) && count($tags))
    	foreach($tags as $key => $tag) {
    		if($key) {
    			$str = $str . ',' . $tag->tag_name;
    		} else {
    			$str = $tag->tag_name;
    		}
    	}
    	return $str;
    }
    
}
