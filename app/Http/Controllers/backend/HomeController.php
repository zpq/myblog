<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//         $this->middleware('auth');
    	if (Gate::denies('adminRight', \Auth::user())) {
    		abort(503);
    	}
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('backend.home');
    }
    
    public function test() {
    	$data['tasks'] = [
    			[
    					'name' => 'Design New Dashboard',
    					'progress' => '87',
    					'color' => 'danger'
    			],
    			[
    					'name' => 'Create Home Page',
    					'progress' => '76',
    					'color' => 'warning'
    			],
    			[
    					'name' => 'Some Other Task',
    					'progress' => '32',
    					'color' => 'success'
    			],
    			[
    					'name' => 'Start Building Website',
    					'progress' => '56',
    					'color' => 'info'
    			],
    			[
    					'name' => 'Develop an Awesome Algorithm',
    					'progress' => '10',
    					'color' => 'success'
    			]
    	];
		return view('backend.home.test')->with($data);    	
    }
}
