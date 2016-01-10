<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
// use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use App\Articles;
use Carbon;
use App\Http\Requests\ArticlesForm;
use YuanChao\Editor\EndaEditor;

class ArticleController extends Controller
{
    public function index()
    {
//     	dd(\Auth::user()->name);
    	$articles = [];
		$articles = Articles::all();
		if(count($articles)) {
			foreach ($articles as $article) {
				$article->content = EndaEditor::MarkDecode($article->content);
			}
		}
		return view('articles.index')->with('articles', $articles);
	}
	
	public function show($id)
	{    	
		$article = Articles::findOrFail($id);
		$article->content = EndaEditor::MarkDecode($article->content);
		return view('articles.show')->with('article', $article);
	}
	
// 	public function create() {
// 		return view('articles.create');
// 	}
	
// 	public function store(ArticlesForm $request) {
// 		$input = $request->all();
// 		$input['published_at'] = Carbon\Carbon::now();
// 		Articles::create($input);
// 		return redirect('articles');
// 	}
	
	
}
