<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('logo_path')->nullable();

            $table->string('slug')->unique();
            $table->string('subdomain')->unique();

            //$table->string('category')->nullable();
            
            $table->longText('about')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('style');

            //contact
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('vk_url')->nullable();
            $table->string('youtube_channel_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('linkedin_url')->nullable();

            $table->string('reddit_url')->nullable();
            $table->string('dribbble_url')->nullable();
            $table->string('pinterest_url')->nullable();
            $table->string('discord_url')->nullable();
            $table->string('soundcloud_url')->nullable();
            $table->string('itunes_url')->nullable();
            $table->string('spotify_url')->nullable();

            $table->string('website_url')->nullable();

            $table->string('location')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            
            $table->string('ios_app_url')->nullable();
            $table->string('android_app_url')->nullable();

            //style
            $table->string('card_shadow');
            $table->string('footer_text_color');

            $table->string('favicon_path')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_tag_description')->nullable();
            $table->string('meta_tag_keywords')->nullable();

            //boolean
            $table->boolean('show_navbar_social_links')->default(1);
            $table->boolean('show_footer_social_links')->default(1);
            $table->boolean('show_mbar')->default(1);
            $table->boolean('show_back_to_top_btn')->default(1);


            $table->boolean('enabled')->default(1);
         
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
