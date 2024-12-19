<?php

namespace App\Http\Controllers;
use App\MOdels\Post;
use illumiante\Http\Controllers;
class Controller extends Controller
{
    // brianstroming now 
    public function index()
    {
        $post= Post ::all();
        return response()->json($posts);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function
    {
        $
    }
}


