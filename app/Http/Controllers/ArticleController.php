<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
// use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis as Redis;
use App\Articles;
use Carbon;
use YuanChao\Editor\EndaEditor;

class ArticleController extends Controller
{
    public function index()
    {
//     	dd(\Auth::user()->name);
    	$articles = [];
		$articles = Articles::orderBy('published_at', 'DESC')->paginate(5);
		if(count($articles)) {
			foreach ($articles as $article) {
				$article->content = EndaEditor::MarkDecode($article->content);
			}
		}
// 		$users->setPath('custom/url');
// 		可以自定义翻页uri.  举例 http://example.com/custom/url?page=N
		return view('articles.index')->with('articles', $articles);
	}

	public function show($id)
	{
        $redis = Redis::connection('default');
        $article = $redis->get("article_$id");
        if ($article) {
            $article = unserialize($article);
        } else {
            $article = Articles::find($id);
    		if(!$article) {
    			return view('errors.404');
    		}
    		$article->content = EndaEditor::MarkDecode($article->content);
            $redis->set("article_$id", serialize($article));
        }

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
