<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResourceCollection;
use App\Models\Page;
use App\Models\Post;
use App\Models\Role;
use App\Services\SlugGeneratorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('twofactorAuthentication');
        //$this->middleware('locale');
    }

    public function index(Page $page)
    {
        $page->users()->findOrFail(Auth::id());
        return view('pages.posts.index', [
            'page' => $page,
        ]);
    }

    public function pagePostsAll(Page $page){
        $page->users()->findOrFail(Auth::id());      
        return new PostResourceCollection($page->posts()->with(['user'])->withCount(['likes', 'shares', 'comments', 'post_views'])->orderBy('created_at', 'DESC')->get());
    }

    public function create(Page $page)
    {
        $page->users()->findOrFail(Auth::id());
        return view('pages.posts.create.index', [
            'page' => $page,
        ]);
    }

    public function store(Page $page, Request $request)
    {

        $user_role = $page->users()->findOrFail(Auth::id())->pivot->role_id;
        if ($user_role != Role::SUPPORT) {
            $generatoService = new SlugGeneratorService();
            $post = new Post();
            $post->title =  $request->title;
            $post->slug = $generatoService->setPostSlug($post->title);
            $post->body =  $request->body;
            $post->page_id =  $page->id;
            $post->user_id =  Auth::id();
            $post->save();
            return redirect()->route('pages.posts.index', $page->id)->with('success', 'New Post Created');
        }
        return back()->with('error', 'Unautherized action, You do not have permission to this action ');
    }

    public function edit(Page $page, $post_id)
    {
        $page->users()->findOrFail(Auth::id());
        $post = $page->posts()->findOrFail($post_id);
     
        return view('pages.posts.edit.index', [
            'page' => $page,
            'post' => $post,
        ]);
    }

    public function update(Page $page, $post_id, Request $request)
    {

        $user_role = $page->users()->findOrFail(Auth::id())->pivot->role_id;
        if ($user_role != Role::SUPPORT) {
            
            $post = $page->posts()->findOrFail($post_id);

            if($post->title !== $request->title){
                $generatoService = new SlugGeneratorService();
                $post->title =  $request->title;
                $post->slug = $generatoService->setPostSlug($post->title);
            }
            $post->body =  $request->body;
           //$post->enabled =  true;

            $post->save();
            return redirect()->route('pages.posts.index', $page->id)->with('success', 'Post Updated');
        }
        return back()->with('error', 'Unautherized action, You do not have permission to this action ');
    }

    public function destroy(Page $page, $post_id)
    {
        $user_role = $page->users()->findOrFail(Auth::id())->pivot->role_id;
        if ($user_role != Role::SUPPORT) {
            $post = $page->posts()->findOrFail($post_id);
            $post->delete();
            return response()->json(['success' => 'Post Deleted']);
        }
        return response()->json(['error' => 'unautherized action'], 403);
    }

    public function changeStatus(Page $page, $post_id)
    {
        $user_role = $page->users()->findOrFail(Auth::id())->pivot->role_id;
        if ($user_role != Role::SUPPORT) {
            $post = $page->posts()->findOrFail($post_id);
            $post->visible = !$post->visible;
            $post->save();
            return response()->json(['success' => 'Post updated']);
        }
        return response()->json(['error' => 'unautherized action'], 403);

    }

    public function changePinStatus(Page $page, $post_id)
    {
        $user_role = $page->users()->findOrFail(Auth::id())->pivot->role_id;
        if ($user_role != Role::SUPPORT) {
            $post = $page->posts()->findOrFail($post_id);
            $post->pin_top = !$post->pin_top;
            $post->save();
            return response()->json(['success' => 'Post updated']);
        }
        return response()->json(['error' => 'unautherized action'], 403);

    }
}
