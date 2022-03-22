<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if($this->middleware('auth'))
        return view('admin.master');

    }
    public function news(){

        $posts = Post::orderBy('id','desc')->limit(3)->get();
        return view('index',['posts'=>$posts]);
    }
}
