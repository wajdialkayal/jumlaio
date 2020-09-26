@extends('layouts.app')
@section('title', __('Profile'))

@section('content')
    <div class="container-fluid">


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


        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-lock"></i> {{ __('Update Password') }}</h4>
                <p class="card-text">{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
                @include('security.partials.update-password-form')
            </div>
        </div>

        <hr>


        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <h4 class="card-title">
                    <i class="fas fa-shield-alt"></i> {{ __('Two Factor Authentication') }}
                    <small>
                        @if (Auth::user()->two_factor_auth)
                            <span class="text-primary">{{ __('Enabled') }}</span>
                        @else
                            <span class="text-danger">{{ __('Disabled') }}</span>
                        @endif
                    </small>
                </h4>
                <p class="card-text">{{ __('Add additional security to your account using two factor authentication.') }}
                    <br> {{ __('When two factor authentication is enabled, you will be prompted for a secure, random
                        number during authentication. You may retrieve this number from your email address') }}
                    <b>{{ Auth::user()->email }}</b>
                </p>
                @include('security.partials.two-factor-authentication-form')
            </div>
        </div>

        <hr>

        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-bell"></i> Setting Up Extra Security <small>
                        @if (Auth::user()->email_alert) <span
                            class="text-primary">Enabled</span> @else <span class="text-danger">Disabled</span>
                        @endif
                    </small> </h4>
                <p class="card-text">Get an alert when anyone logs into your account from a device or browser, at
                    <b>{{ Auth::user()->email }}</b>

                </p>
                @include('security.partials.email-alert-form')
            </div>
        </div>


        <hr>

        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-globe"></i> Browser Sessions</h4>
                <p class="card-text">Manage and logout your active sessions on other browsers and devices.
                    If necessary, you may logout of all of your other browser sessions across all of your devices. If you
                    feel your account has been compromised, you should also update your password.
                </p>
                <ul class="list-group list-group-flush">
                    @foreach ($sessions as $session)
                        <li class="list-group-item">
                            <p>
                                @if ($session->agent->isDesktop()) <i
                                    class="fas fa-desktop"></i> @else <i class="fas fa-mobile-alt"></i> @endif {{ $session->agent->platform() }} - {{ $session->agent->browser() }}
                                <small class="text-muted">
                                    @if ($session->is_current_device)
                                        {{ __('This device') }}
                                    @else
                                        {{ __('Last active') }} {{ $session->last_active }}
                                    @endif
                                </small>
                            </p>

                        </li>
                    @endforeach
                </ul>
                @include('security.partials.logout-other-browser-sessions-form')

            </div>
        </div>

        <hr>

        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-user-times"></i> {{ __('Delete Account') }}</h4>
                <p class="card-text">{{ __('Permanently delete your account. Once your account is deleted, all of its resources and
                        data will be permanently deleted. Before deleting your account, please download any data or information
                        that you wish to retain.') }} </p>

                @include('security.partials.delete-user-form')

            </div>
        </div>


    </div>
@endsection
