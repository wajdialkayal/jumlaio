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
   
@endsection
    
@section('content')
    <div class="container p-4">
    <h4 class="font-weight-bold">About us</h4>
        
    <p>
        {{ $page->About }}
    </p>

    </div>
@endsection
