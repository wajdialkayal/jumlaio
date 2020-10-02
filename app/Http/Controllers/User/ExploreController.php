<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(){
        $pages = Page::with('categories')->get();

        //dd($pages->toArray());

        return view('explore.index',[
            'pages' => $pages
        ]);
    }
}
