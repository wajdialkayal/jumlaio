@if ($page->banners->isNotEmpty())
    <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($page->banners as $banner)
                <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset(Storage::url($banner->banner_path)) }}"
                        class="d-block w-100 banner-image object-fit-cover" alt="banner">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endif
