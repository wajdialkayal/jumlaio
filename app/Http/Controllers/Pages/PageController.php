<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePageRequest;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
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
        $pages = Page::where('owner_id', Auth::id())->orderBy('created_at', 'DESC')->get();

        return view('pages.index', [
            'pages' => $pages
        ]);
    }

    // public function show($subdomain)
    // {
    //     $page = Page::with('banners')->where('subdomain', $subdomain)->firstOrFail();
    //     return view('page.index', [
    //         'page' => $page
    //     ]);
    // }

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
        //dd($request);
        $page_name = $request->page_name;
        $page->name = $page_name;
        $page->about = $request->about;
        $page->short_description = $request->short_des;

        $page->slug = Str::slug($page_name);
        $page->subdomain = Str::slug($page_name, '');

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

        //style
        $page->page_font = $request->page_font;
        $page->body_bg_color = $request->body_bg_color;
        $page->topbar_text_color = $request->topbar_text_color;
        $page->topbar_bg_color = $request->topbar_bg_color;
        $page->mbar_text_color = $request->mbar_text_color;
        $page->mbar_bg_color = $request->mbar_bg_color;
        $page->back_to_top_color = $request->back_to_top_color;
        $page->back_to_top_bg_color = $request->back_to_top_bg_color;
        $page->scrollbar_trak_color = $request->scrollbar_trak_color;
        $page->scrollbar_handle_color = $request->scrollbar_handle_color;
        $page->scrollbar_hover_color = $request->scrollbar_hover_color;
        $page->btn_bg_color = $request->btn_bg_color;
        $page->btn_text_color = $request->btn_text_color;
        $page->btn_style = $request->btn_style;
        $page->card_shadow = $request->card_shadow;
        $page->card_bg_color = $request->card_bg_color;
        $page->card_text_color = $request->card_text_color;
        $page->footer_text = $request->footer_text;
        $page->footer_text_color = $request->footer_text_color;
        $page->footer_bg_color = $request->footer_bg_color;

   
        $page->meta_title = $request->meta_title;
        $page->meta_tag_description = $request->meta_tag_description;
        $page->meta_tag_keywords = $request->meta_tag_keywords;

        $page->show_number_of_followers = $request->show_number_of_followers ? true : false;
        $page->show_number_of_posts = $request->show_number_of_posts ? true : false;
        $page->show_total_views = $request->show_total_views ? true : false;
        $page->show_navbar_social_links = $request->show_navbar_social_links ? true : false;
        $page->show_footer_social_links = $request->show_footer_social_links ? true : false;

        $page->scrollbar_default = $request->scrollbar_default ? true : false;
        $page->show_mbar = $request->show_mbar ? true : false;
        $page->show_back_to_top_btn = $request->show_back_to_top_btn ? true : false;


        
        $page->owner_id = Auth::user()->id;
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

        $page->categories()->attach($request->categories);


        return back()->with('success', 'Page created successfully');
    }

    public function destroy(Page $page)
    {
        $page->categories()->detach();
        $page->delete();
        return back()->with('success', 'Page deleted');
    }


}
