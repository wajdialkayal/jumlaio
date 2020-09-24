@php
    $contacts = [
        ['id' => 'location', 'name' => 'location', 'label' => __('Location'), 'help_block'=> __('Tell your audience your is your brand based'), 'icon' => 'fas fa-map-marker-alt text-danger', ],
        ['id' => 'contacnt_email', 'name' => 'contacnt_email', 'label' => __('Email'), 'help_block'=> __('Your Contact Email Address'), 'icon' => 'fas fa-envelope', ],
        ['id' => 'contacnt_phone', 'name' => 'contacnt_phone', 'label' => __('Phone'), 'help_block'=> __('Your Contact Phone'), 'icon' => 'fas fa-phone-alt', ],
        ['id' => 'whatsapp', 'name' => 'whatsapp', 'label' => __('WhatsApp'), 'help_block'=> __('ex. https://wa.me/1XXXXXXXXXX'), 'icon' => 'fab fa-whatsapp  text-success', ],
        ['id' => 'telegram', 'name' => 'telegram', 'label' => __('Telegram'), 'help_block'=> __('ex. https://t.me/username'), 'icon' => 'fab fa-telegram text-info', ],
        ['id' => 'skype', 'name' => 'skype', 'label' => __('Skype'), 'help_block'=> __('ex. skype:USERNAME?chat'), 'icon' => 'fab fa-skype text-primary', ],
        ['id' => 'viber', 'name' => 'viber', 'label' => __('Viber'), 'help_block'=> __('ex. viber://pa?chatURI=<URI>'), 'icon' => 'fab fa-viber text-primary', ],
        ['id' => 'website_url', 'name' => 'website_url', 'label' => __('Website'), 'help_block'=> __('Link to your website'), 'icon' => 'fas fa-globe', ],

    ];

    $links = [
        ['id' => 'facebook_url', 'name' => 'facebook_url', 'label' => __('Facebook'), 'help_block'=> __('ex. https://www.facebook.com/username'), 'icon' => 'fab fa-facebook text-primary', ],
        ['id' => 'instagram_url', 'name' => 'instagram_url', 'label' => __('Instagram'), 'help_block'=> __('ex. https://www.instagram.com/username'), 'icon' => 'fab fa-instagram text-dark', ],
        ['id' => 'twitter_url', 'name' => 'twitter_url', 'label' => __('Twitter'), 'help_block'=> __('ex. https://twitter.com/username'), 'icon' => 'fab fa-twitter text-info', ],
        ['id' => 'vk_url', 'name' => 'vk_url', 'label' => __('Twitter'), 'help_block'=> __('ex. https://vk.com/username'), 'icon' => 'fab fa-vk text-primary', ],
        ['id' => 'youtube_channel_url', 'name' => 'youtube_channel_url', 'label' => __('YouTube'), 'help_block'=> __('ex. https://www.youtube.com/channel/URI'), 'icon' => 'fab fa-youtube text-danger', ],
        ['id' => 'github_url', 'name' => 'github_url', 'label' => __('GitHub'), 'help_block'=> __('ex. https://github.com/username'), 'icon' => 'fab fa-github text-dark', ],
        ['id' => 'linkedin_url', 'name' => 'linkedin_url', 'label' => __('Linkedin'), 'help_block'=> __('ex. https://www.linkeedin.com/username'), 'icon' => 'fab fa-linkedin text-primary', ],
        ['id' => 'reddit_url', 'name' => 'reddit_url', 'label' => __('Reddit'), 'help_block'=> __('ex. https://www.reddit.com/user/me/'), 'icon' => 'fab fa-reddit text-danger', ],
        ['id' => 'dribbble_url', 'name' => 'dribbble_url', 'label' => __('Dribbble'), 'help_block'=> __('ex. https://dribbble.com/username'), 'icon' => 'fab fa-dribbble text-danger', ],
        ['id' => 'pinterest_url', 'name' => 'pinterest_url', 'label' => __('Pinterest'), 'help_block'=> __('ex. https://www.pinterest.com/username'), 'icon' => 'fab fa-pinterest text-danger', ],
        ['id' => 'discord_url', 'name' => 'discord_url', 'label' => __('Discord'), 'help_block'=> __('ex. https://discord.com'), 'icon' => 'fab fa-discord text-primary', ],
        ['id' => 'soundcloud_url', 'name' => 'soundcloud_url', 'label' => __('SoundCloud'), 'help_block'=> __('ex. https://soundcloud.com/username'), 'icon' => 'fab fa-soundcloud text-warning', ],
        ['id' => 'itunes_url', 'name' => 'itunes_url', 'label' => __('itunes'), 'help_block'=> __('ex. https://itunes.apple.com/artist/username'), 'icon' => 'fab fa-itunes text-info', ],
        ['id' => 'spotify_url', 'name' => 'spotify_url', 'label' => __('Spotify'), 'help_block'=> __('ex. https://open.spotify.com/user/URI'), 'icon' => 'fab fa-spotify text-success', ],
    ];

    $apps = [
        ['id' => 'ios_app_url', 'name' => 'ios_app_url', 'label' => __('IOS App link'), 'help_block'=> __('ex. https://apps.apple.com/app/<package_name>/id1XXXXXX'), 'icon' => 'fab fa-apple', ],
        ['id' => 'android_app_url', 'name' => 'android_app_url', 'label' => __('Android App Link'), 'help_block'=> __('ex. http://play.google.com/store/apps/details?id=<package_name>'), 'icon' => 'fab fa-android text-success', ],

    ];
@endphp



<div class="container mt-3 mb-3">

    <h5>Contact</h5>
    <div class="row">
        @foreach ($contacts as $contact)
            <div class="col-md-4">

                <div class="form-group">
                    <label for="{{ $contact['id'] }}" class="font-weight-bold">

                        <i class="{{ $contact['icon'] }}"></i> {{ $contact['label'] }} 

                        @if($contact['help_block'])
                            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ $contact['help_block'] }}">
                                <i class="fas fa-question-circle"></i>
                            </a> 
                        @endif
                    </label>

                    <input type="text" name="location" id="location" class="form-control shadow-sm"
                        value="{{ old($contact['name']) }}" maxlength="255">
                    
                </div>
            </div>
        @endforeach
    </div>
    
    <hr>

    <h5>Links</h5>
    <div class="row">
        @foreach ($links as $link)
            <div class="col-md-4">
                <div class="form-group">
                    <label for="{{ $link['id'] }}" class="font-weight-bold">

                        <i class="{{ $link['icon'] }}"></i> {{ $link['label'] }} 

                        @if($link['help_block'])
                            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ $link['help_block'] }}">
                                <i class="fas fa-question-circle"></i>
                            </a> 
                        @endif
                    </label>
                    <input type="text" name="location" id="location" class="form-control shadow-sm"
                        value="{{ old($link['name']) }}" maxlength="255">
                </div>
            </div>
        @endforeach
    </div>
 
    <hr>

    <h5>My Apps</h5>
    <div class="row">
        @foreach ($apps as $app)
            <div class="col-md-4">

                <div class="form-group">
                    <label for="{{ $app['id'] }}" class="font-weight-bold">

                        <i class="{{ $app['icon'] }}"></i> {{ $app['label'] }} 

                        @if($app['help_block'])
                            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ $app['help_block'] }}">
                                <i class="fas fa-question-circle"></i>
                            </a> 
                        @endif
                    </label>

                    <input type="text" name="location" id="location" class="form-control shadow-sm"
                        value="{{ old($app['name']) }}" maxlength="255">
                    
                </div>
            </div>
        @endforeach
    </div>
    
</div>
