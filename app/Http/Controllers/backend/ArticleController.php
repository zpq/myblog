<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
// use App\Http\Requests;
// use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use App\Articles;
use App\Tags;
use Carbon;
use Gate;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
	public function __construct()
	{
		if (Gate::denies('adminRight', \Auth::user())) {
			abort(503);
		}
	}	
	
    public function index()
    {
//     	dd(\Auth::user()->name);
		$articles = Articles::all();
		return view('backend.articles.index')->with('articles', $articles);
	}
	
	public function show($id)
	{    	
		$article = Articles::findOrFail($id);
		return view('articles.show')->with('article', $article);
	}
	
	public function create() {
		$tagsList = Tags::all();
		return view('backend.articles.create')->with('tagsList', $tagsList);
	}
	
	public function store(Request $request) {

		$request->request->set('published_at', Carbon\Carbon::now());

		$this->validate($request, [
				'title' => 'required',
				'content' => 'required',
				'published_at' => 'required',
				'tags' => 'required'
		]);	
		$input = $request->all();
		$articleResult = Articles::create($input);
		
		
		$tags_inserts = [];
		$tags = explode(',', ltrim(rtrim(trim($input['tags']), ','),','));
		$tags = array_unique($tags);
		foreach($tags as $tag) {
			if(trim($tag)) {
				$tag_res = Tags::where('tag_name', trim($tag))->first();
				if(!$tag_res) {
					$tags_inserts[] = new Tags(['tag_name' => trim($tag), 'use_nums' => 1]);
					$articleResult->tags()->saveMany($tags_inserts);
				} else {
					$tag_res->use_nums ++;
					$tag_res->save();
					$tag_res->articles()->attach($articleResult->id);
				}
			}
			$tags_inserts = [];
		}

// 		DB::table('tags')->insert($tags_inserts);
		
		return redirect('backend/articles');
	}
	
	public function edit($id) {
		$article = Articles::find($id);
		if($article) {
			$stringTags = Articles::getTagsOfStringWay($id);
			$tagsList = Tags::all();
			return view('backend.articles.edit')->with(['tagsList' => $tagsList, 'article' => $article, 'stringTags' => $stringTags]);
		} else {
			return redirect('backend/articles/create');
		}
	}
	
	public function update(Request $request) {
		
		$articleResult = Articles::find($request->input('id'));
		if(!$articleResult) 
			return redirect('backend/articles');
		
		$request->request->set('published_at', Carbon\Carbon::now());
		
		$this->validate($request, [
				'title' => 'required',
				'content' => 'required',
				'published_at' => 'required',
				'tags' => 'required'
		]);
		$input = $request->all();
		$articleResult->update($input);
		
		
		$raw_tags = array();//文章没有修改前的标签
		foreach($articleResult->tags as $raw_v) {
			$raw_tags[] = $raw_v->tag_name;
		}
		
		$new_tags = explode(',', ltrim(rtrim(trim($input['tags']), ','), ','));
		$new_tags = array_unique(array_map('trim', $new_tags)); //修改后的标签
		
		$tags_inserts = array_diff($new_tags, $raw_tags);//需要和文章新增关系标签
		$tags_deletes = array_diff($raw_tags, $new_tags);;//需要和文章去除关系的标签
		
// 		dd($tags_deletes);
		
		
		DB::beginTransaction();
		try{	
			if(isset($tags_inserts) && count($tags_inserts)) {
				foreach($tags_inserts as $tags_insert) {
					if($tags_insert) {
						$tag_res = Tags::where('tag_name', $tags_insert)->first();
						if(!$tag_res) {
							$articleResult->tags()->saveMany(new Tags(['tag_name' => $tags_insert, 'use_nums' => 1]));
						} else {
							$tag_res->use_nums ++;
							$tag_res->save();
							$tag_res->articles()->attach($articleResult->id);
						}
					}
				}
			}
			
			unset($tag_res);
			
			if(isset($tags_deletes) && count($tags_deletes)) {
				foreach($tags_deletes as $tags_delete) {
					if($tags_delete) {
						$tag_res = Tags::where('tag_name', $tags_delete)->first();
						if($tag_res) {
							$tag_res->use_nums --;
							$tag_res->save();
							$tag_res->articles()->detach($articleResult->id);
						}
					}
				}
			}
			DB::commit();
		} catch(\Exception $e) {
			DB::rollBack();
			dd($e->getMessage());
		}
		
		return redirect('backend/articles');
	}
	
	
}
