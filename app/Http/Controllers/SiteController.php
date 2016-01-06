<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Request;
use Log;
class SiteController extends Controller {
	/**
	 * 显示首页。
	 *
	 * @return Response
	 */
	public function index()
	{
		Log::info('hello');
// 		return 'this is site/index';
		return view('home');
	}
	
	public function about()
	{
		$me = [
				'name'  		=> 		'sheaned',
				'description' 	=>		'a male coder',
				'email' 		=> 		'sheaned@sina.cn',
				'github' 		=> 		'https://github.com/zpq'
		];
		return view('about')->with($me);
	}
	
	
	public function note()
	{
		var_dump(Request::input('id'));
		Log::write('info', 'this is test log');
		return 'this is site/note';
	}
}