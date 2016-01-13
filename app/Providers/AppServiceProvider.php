<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Tags;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
    	$uri = $request->path();//获取当前uri，做导航栏active， 面包学导航
    	$navLists = config('myConfig.navLists');
    	$activeNav = '';
		foreach ($navLists as $key => $navList) {
			foreach ($navList as $navLt) {
				if (preg_match($navLt, $uri)) {
					$activeNav = $key;
					break;
				}
			}
		}
// 		dd($activeNav);
		
		$tagLists = Tags::getTagList();
		view()->share(['tagLists' => $tagLists, 'activeNav' => $activeNav, ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
