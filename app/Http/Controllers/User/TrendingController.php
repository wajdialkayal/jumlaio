<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function index(){

        $posts = Post::with('page')->where('visible', true)->withCount(['likes', 'comments', 'shares', 'post_views'])->get();

        //dd($posts->toArray());
        
        return view('trending.index',[
            'posts' => $posts
        ]);
    }
}
