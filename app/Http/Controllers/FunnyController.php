<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FunnyController extends Controller
{
    public function index() 
    {
        return view('funny.index')->with('funnyApps', config('myConfig.funnyApps'));
    }
}
