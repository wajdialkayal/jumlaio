@extends('layouts.app')

@section('content')
    <div class="container">

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

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
