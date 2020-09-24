@extends('layouts.app')
@section('title', __('My Pages'))

@section('content')
    <div class="container">


        @if ($message = session('status'))
            @include('alerts.status')
        @endif

        @if ($message = session('success'))
            @include('alerts.success')
        @endif

        @if ($message = session('error'))
            @include('alerts.error')
        @endif


        @foreach ($errors->all() as $message)
            @include('alerts.error')
        @endforeach


        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title">{{ __('My Pages') }} <a href="{{ route('pages.create') }}" class="btn btn-outline-dark btn-sm float-md-right">+ {{ __('Create New Page') }}</a> </h4>
                {{-- <p class="card-text">{{ __('Connect with your audience') }}</p> --}}
                @include('pages.partials.pages-table')
            </div>
        </div>

    </div>
@endsection