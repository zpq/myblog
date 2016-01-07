<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
// use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use App\Articles;
use Carbon;


class ArticleController extends Controller
{
    public function index()
    {
		$articles = Articles::all();
		return view('articles.index')->with('articles', $articles);
	}
	
	public function show($id)
	{
		$article = Articles::findOrFail($id);
		return view('articles.show')->with('article', $article);
	}
	
	public function create() {
		return view('articles.create');
	}
	
	public function store(Request $request) {
		$input = $request->all();
		$input['published_at'] = Carbon\Carbon::now();
		Articles::create($input);
		return redirect('articles');
	}
	
	
}
