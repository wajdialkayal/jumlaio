<div class="container mt-3 mb-3">
    
    <h5  class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseContact" aria-expanded="false" aria-controls="collapseContact">{{ __('Contact') }}</h5>

    <div class="collapse" id="collapseContact">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="location" class="font-weight-bold"> <i class="fas fa-map-marker-alt text-danger"></i>
                        {{ __('Location') }} </label>
                    <input type="text" name="location" id="location" class="form-control shadow-sm"
                        value="{{ old('location') }}" maxlength="255">
                    <small class="text-muted">{{ __('Tell your audience your is your brand based') }}</small>
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="website_url" class="font-weight-bold"> <i class="fas fa-globe"></i> {{ __('Website') }}
                        </label>
                    <input type="text" name="website_url" id="website_url" class="form-control shadow-sm"
                        value="{{ old('website_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your website') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="contacnt_email" class="font-weight-bold"> <i class="fas fa-envelope"></i>
                        {{ __('Contacnt email') }} </label>
                    <input type="text" name="contacnt_email" id="contacnt_email" class="form-control shadow-sm"
                        value="{{ old('contacnt_email') }}" maxlength="255">
                    <small
                        class="text-muted">{{ __('Your contact email address, messages will be sent to this account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="contacnt_phone" class="font-weight-bold"> <i class="fas fa-phone-alt"></i>
                        {{ __('Contacnt phone') }} </label>
                    <input type="text" name="contacnt_phone" id="contacnt_phone" class="form-control shadow-sm"
                        value="{{ old('contacnt_phone') }}" maxlength="255">
                    <small class="text-muted">{{ __('Your contact phone') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="whatsapp" class="font-weight-bold"> <i class="fab fa-whatsapp text-success"></i>
                        {{ __('WhatsApp') }} </label>
                    <input type="text" name="whatsapp" id="whatsapp" class="form-control shadow-sm"
                        value="{{ old('whatsapp') }}" maxlength="255">
                    <small class="text-muted">{{ __('Your WhatsApp') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="telegram" class="font-weight-bold"> <i class="fab fa-telegram text-info"></i>
                        {{ __('Telegram') }} </label>
                    <input type="text" name="telegram" id="telegram" class="form-control shadow-sm"
                        value="{{ old('telegram') }}" maxlength="255">
                    <small class="text-muted">{{ __('Your Telegram') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="Skype" class="font-weight-bold"> <i class="fab fa-skype text-primary"></i>
                        {{ __('skype') }} </label>
                    <input type="text" name="skype" id="skype" class="form-control shadow-sm"
                        value="{{ old('skype') }}" maxlength="255">
                    <small class="text-muted"> <a href="https://support.skype.com/en/faq/FA34802/how-do-i-invite-someone-to-chat-in-skype-on-desktop" target="_blank"> {{ __('How to') }}</a></small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="viber" class="font-weight-bold"> <i class="fab fa-viber text-primary"></i>
                        {{ __('Viber') }} </label>
                    <input type="text" name="viber" id="viber" class="form-control shadow-sm"
                        value="{{ old('viber') }}" maxlength="255">
                    <small class="text-muted">{{ __('Your viber') }}</small>
                </div>
            </div>

        </div>
    </div>
    
    
    <hr>

    <h5  class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseLinks" aria-expanded="false" aria-controls="collapseLinks">{{ __('Links') }}</h5>
    <div class="collapse" id="collapseLinks">
        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="facebook_url" class="font-weight-bold"> <i class="fab fa-facebook text-primary"></i>
                        {{ __('Facebook Link') }} </label>
                    <input type="text" name="facebook_url" id="facebook_url" class="form-control shadow-sm"
                        value="{{ old('facebook_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Facebook account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="instagram_url" class="font-weight-bold"> <i class="fab fa-instagram text-dark"></i>
                        {{ __('Instagram Link') }} </label>
                    <input type="text" name="instagram_url" id="instagram_url" class="form-control shadow-sm"
                        value="{{ old('instagram_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Instagram account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="twitter_url" class="font-weight-bold"> <i class="fab fa-twitter  text-info"></i>
                        {{ __('Twitter Link') }} </label>
                    <input type="text" name="twitter_url" id="twitter_url" class="form-control shadow-sm"
                        value="{{ old('twitter_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Twitter account') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="vk_url" class="font-weight-bold"> <i class="fab fa-vk text-primary"></i> {{ __('VK Link') }}
                        </label>
                    <input type="text" name="vk_url" id="vk_url" class="form-control shadow-sm" value="{{ old('vk_url') }}"
                        maxlength="255">
                    <small class="text-muted">{{ __('Link to your VK account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="youtube_channel_url" class="font-weight-bold"> <i class="fab fa-youtube text-danger"></i>
                        {{ __('YouTube Link') }} </label>
                    <input type="text" name="youtube_channel_url" id="youtube_channel_url" class="form-control shadow-sm"
                        value="{{ old('youtube_channel_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your YouTube channel') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="github_url" class="font-weight-bold"> <i class="fab fa-github text-dark"></i>
                        {{ __('Github Link') }} </label>
                    <input type="text" name="github_url" id="github_url" class="form-control shadow-sm"
                        value="{{ old('github_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Github account') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="linkedin_url" class="font-weight-bold"> <i class="fab fa-linkedin text-primary"></i>
                        {{ __('Linkedin Link') }} </label>
                    <input type="text" name="linkedin_url" id="linkedin_url" class="form-control shadow-sm"
                        value="{{ old('linkedin_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Linkedin account') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="reddit_url" class="font-weight-bold"> <i class="fab fa-reddit text-danger"></i>
                        {{ __('Redddit Link') }} </label>
                    <input type="text" name="reddit_url" id="reddit_url" class="form-control shadow-sm"
                        value="{{ old('reddit_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Reddit account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="dribbble_url" class="font-weight-bold"> <i class="fab fa-dribbble text-danger"></i>
                        {{ __('Dribbble Link') }} </label>
                    <input type="text" name="dribbble_url" id="dribbble_url" class="form-control shadow-sm"
                        value="{{ old('dribbble_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Dribbble account') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="pinterest_url" class="font-weight-bold"> <i class="fab fa-pinterest text-danger"></i>
                        {{ __('Pinterest Link') }} </label>
                    <input type="text" name="pinterest_url" id="pinterest_url" class="form-control shadow-sm"
                        value="{{ old('pinterest_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Pinterest account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="discord_url" class="font-weight-bold"> <i class="fab fa-discord text-primary"></i>
                        {{ __('Discord Link') }} </label>
                    <input type="text" name="discord_url" id="discord_url" class="form-control shadow-sm"
                        value="{{ old('discord_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Discord account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="soundcloud_url" class="font-weight-bold"> <i class="fab fa-soundcloud"></i>
                        {{ __('Soundcloud Link') }} </label>
                    <input type="text" name="soundcloud_url" id="soundcloud_url" class="form-control shadow-sm"
                        value="{{ old('soundcloud_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Soundcloud account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="itunes_url" class="font-weight-bold"> <i class="fab fa-itunes text-info"></i>
                        {{ __('itunes Link') }} </label>
                    <input type="text" name="itunes_url" id="itunes_url" class="form-control shadow-sm"
                        value="{{ old('itunes_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your itunes account') }}</small>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label for="spotify_url" class="font-weight-bold"> <i class="fab fa-spotify text-success"></i>
                        {{ __('Spotify Link') }} </label>
                    <input type="text" name="spotify_url" id="spotify_url" class="form-control shadow-sm"
                        value="{{ old('spotify_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Spotify account') }}</small>
                </div>
            </div>

        </div>
    </div>

    <hr>

    <h5  class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseApps" aria-expanded="false" aria-controls="collapseApps">{{ __('My Apps') }}</h5>

    <div class="collapse" id="collapseApps">
        <div class="row">
        
            <div class="col-md-6">
                <div class="form-group">
                    <label for="ios_app_url" class="font-weight-bold"> <i class="fab fa-apple"></i> {{ __('IOS App') }}
                        </label>
                    <input type="text" name="ios_app_url" id="ios_app_url" class="form-control shadow-sm"
                        value="{{ old('ios_app_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your IOS application on App Store') }}</small>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="android_app_url" class="font-weight-bold"> <i class="fab fa-android text-success"></i>
                        {{ __('Android App') }} </label>
                    <input type="text" name="android_app_url" id="android_app_url" class="form-control shadow-sm"
                        value="{{ old('android_app_url') }}" maxlength="255">
                    <small class="text-muted">{{ __('Link to your Android application on Google Play') }}</small>
                </div>
            </div>
        </div>
    </div>

</div>
