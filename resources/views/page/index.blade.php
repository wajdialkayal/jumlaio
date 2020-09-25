@extends('page.master')
@section('favicon', $page->favicon_url)
@section('meta-keywords', $page->meta_tag_keywords ?? $page->name)
@section('meta-description', $page->meta_tag_description ?? $page->name)
@section('apple-touch-icon', $page->logo_url)
@section('title', $page->meta_title ?? $page->name)

    @push('styles')
        @include('page.style')
    @endpush

@section('content')
    <div class="container">

        <button class="btn page-btn">Button</button>
        <a class="btn page-btn">Link</a>


        <div class="card mt-3 {{ $page->card_shadow }}">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
            </div>
        </div>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet,
            consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing
            elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod
            tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt
            uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit
            amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur
            adipiscing elit,sed do eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do
            eiusmod tempor incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor
            incididunt uLorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt uLorem
            ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt u
        </p>


    </div>
@endsection
