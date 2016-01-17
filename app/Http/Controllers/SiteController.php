<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Log;
class SiteController extends Controller {

// 	public function __construct() {
// 		$this->middleware('auth');
// 	}
	
	/**
	 * 显示首页。
	 *
	 * @return Response
	 */
	public function index()
	{
		Log::info('hello');
		return view('home');
	}
	
	public function about()
	{
		$me = [
				'name'  		=> 		'zpq',
				'description' 	=>		'wish to be a full stack developer',
				'email' 		=> 		'307154456@qq.com',
				'github' 		=> 		'https://github.com/zpq'
		];
		return view('about')->with($me);
	}
	
	
	public function note()
	{
// 		var_dump(Request::input('id'));
		Log::write('info', 'this is test log');
		return 'this is site/note';
	}
}