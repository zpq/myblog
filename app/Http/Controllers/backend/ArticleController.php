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
		foreach($tags as $tag) {
			if($tag) {
				$tag_res = Tags::where('tag_name', $tag)->first();
				if(!$tag_res) {
					$tags_inserts[] = new Tags(['tag_name'=>$tag,'use_nums' => 1]);
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
	
	
}
