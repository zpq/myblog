<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	
// 	public function __construct() {
// 		$this->middleware('auth');
// 	}
	
    public function index() {
		dd('admin');
	}
}
