<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageView;
use App\Models\Post;
use App\Models\PostView;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageMainController extends Controller
{

    public function index($subdomain)
    {

        $page = Page::with('banners')->with([
            'posts' => function ($query) {
                $query->where('visible', true)->with('user')->withCount(['likes', 'comments', 'shares', 'post_views'])->orderBy('created_at', 'DESC');
            }
        ])->where('subdomain', $subdomain)->firstOrFail();

        PageView::create([
            'ip_address' => request()->ip(),
            'country' => \Location::get(request()->ip()),
            'user_id' => Auth::check() ?? Auth::id(),
            'page_id' => $page->id,
            ]);

        $timezone = get_local_timezone();
        
        return view('page.index', [
            'page' => $page,
            'timezone' => $timezone,
        ]);
    }


    public function show($subdomain, $slug)
    {
        $page = Page::where('subdomain', $subdomain)->firstOrFail();
        $post = $page->posts()->where('slug', $slug)->where('visible', true)->withCount(['likes', 'comments', 'shares', 'post_views'])->firstOrFail();

        PostView::create([
            'ip_address' => request()->ip(),
            'country' => \Location::get(request()->ip()),
            'user_id' => Auth::check() ?? Auth::id(),
            'post_id' => $post->id,
            ]);

        return view('page.show', [
            'page' => $page,
            'post' => $post,
        ]);
    }


    public function about($subdomain)
    {
        $page = Page::where('subdomain', $subdomain)->firstOrFail();
        return view('page.about', [
            'page' => $page,
        ]);
    }

    public function contact($subdomain)
    {
        $page = Page::where('subdomain', $subdomain)->firstOrFail();
        return view('page.contact', [
            'page' => $page,
        ]);
    }
}
