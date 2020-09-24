@extends('layouts.app')
@section('title', __('Profile'))

@section('content')
    <div class="container">


        @if ($message = session('status'))
            @include('alerts.status')
        @endif

        @if (session('resent'))
            @php
                $message = __('we send you a verification link')
            @endphp
            @include('alerts.status')
        @endif

        @if (Auth::check() && !Auth::user()->hasVerifiedEmail())
            @include('alerts.email-verify')
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
                <h4 class="card-title">{{ __('Profile Information') }}</h4>
                <p class="card-text">{{ __('Update your account\'s profile information and email address.') }}</p>
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

    </div>
@endsection
