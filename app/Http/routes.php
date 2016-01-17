<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



	
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	
	
	Route::group(['prefix'=>'backend', 'namespace'=> 'backend', 'middleware'=>'auth'], function(){
	
		Route::get('/', 'HomeController@index');
		Route::get('test', 'HomeController@test');
		Route::get('articles', 'ArticleController@index');
		Route::get('articles/create', 'ArticleController@create');
		Route::get('articles/edit/{id}', 'ArticleController@edit');
		Route::post('articles', 'ArticleController@store');
		Route::post('articles/update', 'ArticleController@update');
		Route::post('articles/uploadArticleImg', 'ArticleController@uploadArticleImg');
		// 			Route::resource('home', 'backend\HomeController');
		// 	Route::resource('cate','backend\CateController');
		// 	Route::resource('content','backend\ContentController');
		// 	Route::resource('article','backend\ArticleController');
		// 	Route::resource('tags','backend\TagsController');
		// 	Route::resource('user','backend\UserController');
		// 	Route::resource('comment','backend\CommentController');
		// 	Route::resource('nav','backend\NavigationController');
		// 	Route::resource('links','backend\LinksController');
		// 	Route::controllers([
		// 			'system'=>'backend\SystemController',
		// 			'upload'=>'backend\UploadFileController'
		// 	]);
	
	});
	

	Route::auth();
	
	Route::get('/', 'ArticleController@index');
	Route::get('about', 'SiteController@about');
	Route::get('articles', 'ArticleController@index');
// 	Route::get('articles/create', 'ArticleController@create');
	Route::get('articles/{id}', 'ArticleController@show');
// 	Route::post('articles', 'ArticleController@store');
	Route::post('search/index', 'SearchController@index');
	Route::get('search/tags/{id}', 'SearchController@tags');
// 	Route::get('auth/login', 'Auth\AuthController@getLogin');
// 	Route::post('auth/login', 'Auth\AuthController@postLogin');
// 	Route::get('auth/register', 'Auth\AuthController@getRegister');
// 	Route::post('auth/register', 'Auth\AuthController@postRegister');
// 	Route::get('auth/logout', 'Auth\AuthController@logout');
	


	
	
	
// 	Route::group(['middleware' => ['csrf']], function () {
// 		Route::controllers([
// 				'auth' => 'Auth\AuthController',
// 				'password' => 'Auth\PasswordController'
// 		]);
// 	});
	

});


	






// Route::group(['middleware' => 'web'], function () {
//     Route::auth();

//     Route::get('/home', 'HomeController@index');
// });
