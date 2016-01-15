<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articles;
use YuanChao\Editor\EndaEditor;

class SearchController extends Controller
{
	public function __construct() {
		
	}
	
	public function index(Request $request) {
		$keywords = $request->input('keywords');
		if(!$keywords)
			return redirect('/');
		$articles = [];
		$articles = Articles::articleSearchByKeywords($keywords, 3);
		if(count($articles)) {
			foreach ($articles as $article) {
				$article->content = EndaEditor::MarkDecode($article->content);
			}
		}
		
		return view('articles.index')->with('articles', $articles);
	}
	
	public function tags($id) {
// 		$tagId = $request->input('id');
		$articles = [];
		$articles = Articles::articleSearchByTags($id, 3);
		if(count($articles)) {
			foreach ($articles as $article) {
				$article->content = EndaEditor::MarkDecode($article->content);
			}
		}
		return view('articles.index')->with('articles', $articles);
	}
	
}
