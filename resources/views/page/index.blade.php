@extends('page.master')
@section('favicon', $page->favicon_url)
@section('meta-keywords', $page->meta_tag_keywords ?? $page->name)
@section('meta-description', $page->meta_tag_description ?? $page->name)
@section('apple-touch-icon', $page->logo_url)
@section('title', $page->meta_title ?? $page->name)

    @push('styles')
        @include('page.style')
    @endpush

    @section('includes')
        @include('page.layouts.navbar')
        @include('page.layouts.middle-bar')
        @include('page.layouts.banners')
    @endsection
    
@section('content')
    <div class="container p-4">
        @foreach ($page->posts as $post)
        @if ($post->pin_top)
        <div class="card mt-3 {{ $page->card_shadow }}">
            <div class="card-body">
                <i class="fas fa-thumbtack float-right"></i>
                <div class=" d-flex"> 
                    <img src="{{ $page->logo_url }}" class="rounded-circle object-fit-cover border" width="60" height="60" alt="">

                  <div class="d-inline-block px-2">
                    <h3>{{ $page->name }} </h3> 
                    <small class="text-muted">

                        @if($post->created_at->format('Y') == Carbon\Carbon::now()->year)

                            {{ $post->created_at->format('d M') }}

                            @if($post->created_at->isToday())

                                {{ $post->created_at->diffForHumans }}
                            @endif

                        @else
                            {{ $post->created_at->format('d M Y') }}
                        @endif
                       
                    </small>
                        
                  </div>
                    
                </div>
                
                <h3 class="card-title font-weight-bold mt-2">{{ $post->title }}</h3>


                @if(preg_match('/<img(.*?)>/', $post->body, $match) == 1)
                    <div class="w-100 text-center">
                        {!! '<img class="object-fit-cover w-100 h-190px" '.$match[1].'>' !!}
                    </div>
                @endif
                <p class="card-text">
                    {{ substr(strip_tags($post->body), 0, 300) }}
                    {{ strlen($post->body) > 300 ? '...' : '' }}
                </p>

                
                <a href="{{ route('page.post.show', [ $page->subdomain, $post->slug]) }}" class="btn page-btn">
                    Continue Reading
                </a>
            </div>
            <div class="card-footer bg-transparent border-0 mt-2">


                <ul class="list-inline" style="margin: 0px 0px 0px;">
                    <li class="list-inline-item"><i class="fas fa-heart"></i> {{ $post->likes_count }}</li>
                    <li class="list-inline-item"><i class="fas fa-comment"></i> {{ $post->comments_count }}</li>
                    <li class="list-inline-item"> <i class="fas fa-share"></i> {{ $post->shares_count }}</li>
                    <li class="list-inline-item float-right"> <i class="fas fa-eye"></i> {{ $post->shares_count }}</li>
                  </ul>
            </div>
        </div>
        @endif
        @endforeach

    
        @foreach ($page->posts as $post)
            <div class="card mt-3 {{ $page->card_shadow }}">
                <div class="card-body">
                    <div class=" d-flex"> 
                        <img src="{{ $page->logo_url }}" class="rounded-circle object-fit-cover border" width="60" height="60" alt="">

                      <div class="d-inline-block px-2">
                        <h3>{{ $page->name }} </h3> 
                        <small class="text-muted">

                            @if($post->created_at->format('Y') == Carbon\Carbon::now()->year)
    
                                {{ $post->created_at->translatedFormat('d M') }}
                              
                                @if($post->created_at->isToday())
    
                                    {{ $post->created_at->diffForHumans() }}
                                @endif
    
                            @else
                                {{ $post->created_at->format('d M Y') }}
                            @endif
                           
                        </small>
                      </div>
                        
                    </div>

                    <h3 class="card-title font-weight-bold mt-2">{{ $post->title }}</h3>
                    @if(preg_match('/<img(.*?)>/', $post->body, $match) == 1)
                        <div class="w-100 text-center">
                            {!! '<img class="object-fit-cover w-100 h-190px" '.$match[1].'>' !!}
                        </div>
                    @endif
                    <p class="card-text">
                        {{ substr(strip_tags($post->body), 0, 300) }}
                        {{ strlen($post->body) > 300 ? '...' : '' }}
                    </p>

                    <a href="{{ route('page.post.show', [ $page->subdomain, $post->slug]) }}" class="btn page-btn">
                        Continue Reading
                    </a>
                </div>
                <div class="card-footer bg-transparent border-0 mt-2">


                    <ul class="list-inline" style="margin: 0px 0px 0px;">
                        <li class="list-inline-item"><i class="fas fa-heart"></i> {{ $post->likes_count }}</li>
                        <li class="list-inline-item"><i class="fas fa-comment"></i> {{ $post->comments_count }}</li>
                        <li class="list-inline-item"> <i class="fas fa-share"></i> {{ $post->shares_count }}</li>
                        <li class="list-inline-item float-right"> <i class="fas fa-eye"></i> {{ $post->post_views_count }}</li>
                      </ul>
                </div>
            </div>
        @endforeach
      

    </div>
@endsection
@push('scripts')
    <script>
         var timezone = moment.tz.guess();
        $('#timezone').text(timezone);
        console.log(timezone);
    </script>
@endpush