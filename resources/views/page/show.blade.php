@extends('page.master')
@section('favicon', $page->favicon_url)
@section('meta-keywords', $page->meta_tag_keywords ?? $page->name)
@section('meta-description', substr(strip_tags($post->body), 0, 300))
@section('apple-touch-icon', $page->logo_url)
@section('title', $post->title)

    @push('styles')
        @include('page.style')
    @endpush
    @section('includes')
        @include('page.layouts.navbar')
       
    @endsection
    
@section('content')
    <div class="container p-4">
    <h1 class="font-weight-bold">{{ $post->title }}</h1>
        
      {!! $post->body !!}

    </div>
@endsection
