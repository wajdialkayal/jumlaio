<nav class="navbar navbar-expand-sm shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('page.index', $page->subdomain) }}">{{ $page->name }}</a>
        <button class="navbar-toggler d-lg-none align-items-center" type="button" data-toggle="collapse"
            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('page.index', $page->subdomain) }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('page.about', $page->subdomain) }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('page.contact', $page->subdomain) }}">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                @if ($page->show_navbar_social_links)
                    @if ($page->facebook_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->facebook_url }}" data-toggle="tooltip"
                                data-placement="bottom" title="Facebook"> <i class="fab fa-facebook"></i> </a>
                        </li>
                    @endif
                    @if ($page->instagram_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->instagram_url }}" data-toggle="tooltip"
                                data-placement="bottom" title="Instagram"> <i class="fab fa-instagram"></i> </a>
                        </li>
                    @endif
                    @if ($page->twitter_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->twitter_url }}" data-toggle="tooltip"
                                data-placement="bottom" title="Twitter"> <i class="fab fa-twitter"></i> </a>
                        </li>
                    @endif
                    @if ($page->vk_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->vk_url }}" data-toggle="tooltip" data-placement="bottom"
                                title="Vk"> <i class="fab fa-vk"></i> </a>
                        </li>
                    @endif
                    @if ($page->youtube_channel_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->youtube_channel_url }}" data-toggle="tooltip"
                                data-placement="bottom" title="YouTube"> <i class="fab fa-youtube"></i> </a>
                        </li>
                    @endif
                    @if ($page->github_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->github_url }}" data-toggle="tooltip"
                                data-placement="bottom" title="GitHub"> <i class="fab fa-github"></i> </a>
                        </li>
                    @endif
                    @if ($page->linkedin_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->linkedin_url }}" data-toggle="tooltip"
                                data-placement="bottom" title="Linkedin"> <i class="fab fa-linkedin"></i> </a>
                        </li>
                    @endif
                    @if ($page->website_url)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $page->website_url }}" data-toggle="tooltip"
                                data-placement="bottom" title="Website"> <i class="fas fa-globe"></i> </a>
                        </li>
                    @endif

                @endif

            </ul>
        </div>
    </div>
</nav>
