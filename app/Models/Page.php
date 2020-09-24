<?php

namespace App\Models;

use App\Traits\HasFavicon;
use App\Traits\HasLogo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory, HasLogo, HasFavicon;

    protected $fillable = [
        'name', 
        'logo_path', 
        'slug', 
        'subdomain', 
        'about', 
        'short_description', 
        'facebook_url', 
        'instagram_url',
        'twitter_url',
        'vk_url',
        'youtube_channel_url',
        'linkedin_url',
        'website_url',
        'location',
        'contact_email',
        'contact_phone',
        'whatsapp',
        'telegram',
        'ios_app_url',
        'android_app_url',
        'name_font',
        'body_bg_color',
        'topbar_text_color',
        'topbar_bg_color',

        'mbar_text_color',
        'mbar_bg_color',
        'back_to_top_color',
        'back_to_top_bg_color',
        'scrollbar_trak_color',
        'scrollbar_handle_color',
        'scrollbar_hover_color',

        'btn_bg_color',
        'btn_text_color',
        'btn_style',
        'card_shadow',
        'card_bg_color',
        'card_text_color',

        'footer_text',
        'footer_text_color',
        'footer_bg_color',
        'favicon_path',
        'meta_title',
        'meta_tag_description',
        'meta_tag_keywords',
        'show_number_of_followers',
        'show_number_of_posts',
        'show_total_views',
        'show_navbar_social_links',
        'show_footer_social_links',
        'enabled',
        'owner_id',
    ];
    protected $appends = [
        'logo_url',
        'favicon_url',
    ];
    public function banners()
    {
        return $this->hasMany('App\Models\Banner');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }

    // protected static function boot() {
    //     parent::boot();
    
    //     static::deleted(function ($category) {
    //       $category->items()->delete();
    //     });
    // }
}
