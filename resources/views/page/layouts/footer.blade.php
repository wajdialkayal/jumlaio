<footer class="page-footer font-small pt-4 m-300">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left mt-3 pb-3">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-lithospro font-weight-bold">{{ $page->name }}</h6>
                <p>{{ $page->footer_text }}</p>

            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold roboto-text"></h6>
                <p>
                    <a class="footer-link" href="#">{{ __('Home') }}</a>
                </p>
                <p>
                    <a class="footer-link" href="#">{{ __('Contact') }}</a>
                </p>
                <p>
                    <a class="footer-link" href="#">{{ __('About') }}</a>
                </p>
            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold"></h6>

            </div>
            <hr class="w-100 clearfix d-md-none">
            <div class="col-md-4 col-lg-3 col-xl-3 text-center">

                @if ($page->ios_app_url)
                    <a href="{{ $page->ios_app_url }}" target="_blank">
                        <img src="{{ asset('images/badges/app-store-badge.svg') }}" alt="app-store" width="250"
                            height="60">
                    </a>
                @endif
                @if ($page->android_app_url)
                    <a href="{{ $page->android_app_url }}" target="_blank">
                        <img src="{{ asset('images/badges/google-play-badge.svg') }}" alt="app-store" width="250"
                            height="60" class="mt-2">
                    </a>
                @endif

            </div>
        </div>
        <hr>
        <div class="row d-flex align-items-center">
            <div class="col-md-4 col-lg-4">
                <p class="text-center text-md-left ">
                    <a class="footer-link" href="#">العربية</a> |
                    <a class="footer-link" href="">English</a>
                </p>
                <p class="text-center text-md-left">{{ $page->name }} © {{ date('Y') }} {{ __('Copyright') }}
                </p>
            </div>
            <div class="col-md-8 col-lg-8 ml-lg-0">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">

                        @if ($page->show_footer_social_links)
                            @if ($page->facebook_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->facebook_url }}"
                                        data-toggle="tooltip" data-placement="top" title="Facebook"> <i
                                            class="fab fa-facebook"></i> </a>
                                </li>
                            @endif
                            @if ($page->instagram_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->instagram_url }}"
                                        data-toggle="tooltip" data-placement="top" title="Instagram"> <i
                                            class="fab fa-instagram"></i> </a>
                                </li>
                            @endif
                            @if ($page->twitter_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->twitter_url }}"
                                        data-toggle="tooltip" data-placement="top" title="Twitter"> <i
                                            class="fab fa-twitter"></i> </a>
                                </li>
                            @endif
                            @if ($page->vk_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->vk_url }}" data-toggle="tooltip"
                                        data-placement="top" title="Vk"> <i class="fab fa-vk"></i> </a>
                                </li>
                            @endif
                            @if ($page->youtube_channel_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->youtube_channel_url }}"
                                        data-toggle="tooltip" data-placement="top" title="YouTube"> <i
                                            class="fab fa-youtube"></i> </a>
                                </li>
                            @endif
                            @if ($page->github_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->github_url }}"
                                        data-toggle="tooltip" data-placement="top" title="GitHub"> <i
                                            class="fab fa-github"></i> </a>
                                </li>
                            @endif
                            @if ($page->linkedin_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->linkedin_url }}"
                                        data-toggle="tooltip" data-placement="top" title="Linkedin"> <i
                                            class="fab fa-linkedin"></i> </a>
                                </li>
                            @endif
                            @if ($page->website_url)
                                <li class="list-inline-item">
                                    <a class="btn btn-sm social-btn" href="{{ $page->website_url }}"
                                        data-toggle="tooltip" data-placement="top" title="Website"> <i
                                            class="fas fa-globe"></i> </a>
                                </li>
                            @endif

                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
