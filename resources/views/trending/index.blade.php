@extends('layouts.app')
@section('title', __('Explore'))

@section('content')



        @if ($message = session('status'))
            @include('alerts.status')
        @endif

        @if (session('resent'))
            @php
                $message = __('we send you a verification link')
            @endphp
            @include('alerts.status')
        @endif

        {{-- @if (Auth::check() && !Auth::user()->hasVerifiedEmail())
            @include('alerts.email-verify')
        @endif --}}

      
        @foreach ($errors->all() as $message)
            @include('alerts.error')
        @endforeach
      
        <div class="row justify-content-center">
            <div class="col-md-5">
                
                @foreach ($posts as $post)
            <div class="card mt-3">
                <div class="card-body">
                    <div class=" d-flex"> 
                        <img src="{{ $post->page->logo_url }}" class="rounded-circle object-fit-cover border" width="60" height="60" alt="">

                      <div class="d-inline-block px-2">
                        <h3>{{ $post->page->name }} </h3> 
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

                    <a href="{{ route('page.post.show', [ $post->page->subdomain, $post->slug]) }}" class="btn btn-primary px-4">
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
        </div>

        
    </div>
@endsection
@push('scripts')

    @if ($message = session('success'))
        @include('alerts.swal-success')
    @endif

    @if ($message = session('error'))
        @include('alerts.swal-error')
    @endif

@endpush