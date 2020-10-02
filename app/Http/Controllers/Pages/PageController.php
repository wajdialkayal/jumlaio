<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageRequest;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Role;
use App\Services\SlugGeneratorService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('twofactorAuthentication');
        //$this->middleware('locale');
    }

    public function index()
    {        
        return view('pages.index', [
            'pages' => Auth::user()->pages()->withCount('followers')->orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function show($id)
    {

        $page = Page::withCount(['posts', 'likes', 'comments', 'shares', 'followers', 'page_views'])
        ->whereHas('users', function($query) {
            $query->where('user_id', Auth::id());
        })->findOrFail($id);
   
        return view('pages.dashboard.index', [
            'page' => $page
        ]);
    }

    public function create()
    {
        $categories = Category::orderBY('display_name', 'ASC')->get();
        $fonts = DB::table('fonts')->orderBy('name', 'ASC')->get();

        return view('pages.create.index', [
            'categories' => $categories,
            'fonts' => $fonts,
        ]);
    }

    public function store(CreatePageRequest $request)
    {
        //dd($request);
        $page = new Page();
        $generatoService = new SlugGeneratorService();
        //dd($request);
        $page_name = $request->page_name;
        $page->name = $page_name;
        $page->about = $request->about;
        $page->short_description = $request->short_des;

        $page->slug = $generatoService->setSlug($page_name);
        $page->subdomain = Str::slug($page->slug, '');

        //contact & social media
        $page->facebook_url = $request->facebook_url;
        $page->instagram_url = $request->instagram_url;
        $page->twitter_url = $request->twitter_url;
        $page->vk_url = $request->vk_url;
        $page->youtube_channel_url = $request->youtube_channel_url;
        $page->github_url = $request->github_url;
        $page->linkedin_url = $request->linkedin_url;
        $page->reddit_url = $request->reddit_url;
        $page->dribbble_url = $request->dribbble_url;
        $page->pinterest_url = $request->pinterest_url;
        $page->discord_url = $request->discord_url;
        $page->soundcloud_url = $request->soundcloud_url;
        $page->itunes_url = $request->itunes_url;
        $page->spotify_url = $request->spotify_url;
        $page->website_url = $request->website_url;
        $page->location = $request->location;
        $page->contact_email = $request->contact_email;
        $page->contact_phone = $request->contact_phone;
        $page->whatsapp = $request->whatsapp;
        $page->telegram = $request->telegram;
        $page->ios_app_url = $request->ios_app_url;
        $page->android_app_url = $request->android_app_url;

        $style = '
            .body{ background-color: ' . $request->body_bg_color . ' !important; color: ' . $request->body_text_color . '; }
            *{ font-family:  ' . $request->page_font . ' ; }

            .navbar-brand{ color: ' .  $request->topbar_text_color . ' ; }
            .navbar { background-color: ' .  $request->topbar_bg_color . ' ; }
            .nav-link, .fa-bars { color: ' .  $request->topbar_text_color . ' ;}
            .nav-link:hover{ color: ' .  $request->topbar_text_color_hover . ' ;}
            .nav-brand:hover{ color: ' .  $request->topbar_text_color_hover . ' ;}

            .navbar-toggler{ border-color: ' .  $request->topbar_text_color . '; }
            
            
            .mbar{ background-color: ' .  $request->mbar_bg_color . ' ; color: ' .  $request->mbar_text_color . ' ; height: 250px; }
            
            .banner-image{ height: 350px; }

            .btn-back-to-top-page {
                display: none;
                position: fixed;
                width: 40px;
                height: 40px;
                bottom: 40px;
                right: 40px;
                background-color: ' .  $request->back_to_top_bg_color  . ' ;
                justify-content: center;
                align-items: center;
                z-index: 1000;
                border-radius: 25px;
                transition: all .4s;
                -webkit-transition: all .4s;
                -o-transition: all .4s;
                -moz-transition: all .3s
            }
        
            .symbol-btn-back-to-top-page { font-size: 22px; color: ' .  $request->back_to_top_color  . ' ; line-height: 1em; }
            .symbol-btn-back-to-top-page:hover { color: ' .  $request->back_to_top_color_hover  . ' ; }

            .btn-back-to-top-page:hover {
                cursor: pointer;
                background-color: ' .  $request->back_to_top_bg_color_hover  . ' ;
            }
        
            .page-footer{
                color: ' .  $request->footer_text_color  . ' ;
                background-color: ' .  $request->footer_bg_color  . ' ;
            }
            
            .footer-link, .social-btn{
                color: ' .  $request->footer_text_color  . ' ;
            }
            
            
            .page-btn{
                background: ' .  $request->btn_bg_color  . '; 
                color: ' .  $request->btn_text_color  . '; 
            }
            .page-btn:hover{
                background: ' .  $request->btn_bg_color_hover  . '; 
                color: ' .  $request->btn_text_color_hover  . '; 
            }

            .card{
                background: ' .  $request->card_bg_color  . '; 
                color: ' .  $request->card_text_color  . '; 
            }
            .mbar-logo{
                width: 145px;
                height: 145px;
            }
            .object-fit-cover{object-fit: cover}
        ';
        if($page->btn_style == 'rounded'){
            $style .= '.page-btn{border-radius: 25px;}';
        }else{
            $style .= '.page-btn{border-radius: 0px;}';
        }
        


        //style

        $page->style = $style;
        $page->card_shadow = $request->card_shadow;
        $page->footer_text_color = $request->footer_text_color;

        //SEO
        $page->meta_title = $request->meta_title;
        $page->meta_tag_description = $request->meta_tag_description;
        $page->meta_tag_keywords = $request->meta_tag_keywords;

        //options
        $page->show_navbar_social_links = $request->show_navbar_social_links ? true : false;
        $page->show_footer_social_links = $request->show_footer_social_links ? true : false;
        $page->show_mbar = $request->show_mbar ? true : false;
        $page->show_back_to_top_btn = $request->show_back_to_top_btn ? true : false;


        $page->save();
        if (isset($request->logo)) {
            $page->updateLogo($request->logo);
        }
        if (isset($request->favicon)) {
            $page->updateFavicon($request->favicon);
        }

        if ($request->hasFile('banners')) {
            foreach ($request->banners as $banner_image) {
                $banner = new Banner();
                $banner->banner_path = $banner_image->store('banners', 'public');
                $banner->page_id = $page->id;
                $banner->save();
            }
        }
        $user = Auth::user();
        $page->categories()->attach($request->categories);
        $user->pages()->attach($page->id, array('role_id' => Role::OWNER));
       

        return redirect()->route('pages.index')->with('success', 'Page Created Successfully');
    }

    public function destroy(Page $page)
    {
        //$page->categories()->detach();
        $page->delete();
        return back()->with('success', 'Page deleted');
    }
}
