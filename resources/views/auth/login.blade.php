@extends('layouts.app')
@section('title', __('Jumla - Login'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">

                <div class="card-body">
                    <h4 class="card-title text-center">{{ __('Login') }}</h4>

                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="font-weight-bold"> <i class="fas fa-envelope"></i> {{ __('Email') }}</label>

                                <input id="email" type="email" class="form-control shadow-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="password" class="font-weight-bold"> <i class="fas fa-key"></i> {{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control shadow-sm @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a class="j-link float-md-right" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-dark shadow-sm w-100" id="login-btn">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                    <div class="divider-text mb-3"><span>Or</span></div>
                    

                    <form action="#" method="POST">
                        <button type="submit" class="btn btn-light w-100 shadow-sm mb-3 border"> <img src="{{ asset('images/icons/google.svg') }}" width="13" height="13" alt="google"> {{ __('Continue with Google') }}</button>
                    </form>
                    <form action="#" method="POST">
                        <button type="submit" class="btn btn-facebook w-100 shadow-sm mb-3"><i class="fab fa-facebook-square"></i> {{ __('Continue with Facebook') }}</button>
                    </form>
                    <form action="#" method="POST">
                        <button type="submit" class="btn btn-twitter w-100 shadow-sm mb-3"> <i class="fab fa-twitter"></i> {{ __('Continue with Twitter') }}</button>
                    </form>
                    <div class="text-center">
                        <a class="j-link" href="{{ route('register') }}">
                            {{ __('Don\'t have an account? Sign up here') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <img src="{{ asset('images/Illustrations/login.svg') }}" style="width: 100%;height: auto;" alt="create-page">
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
    $( "#login-form" ).submit(function( event ) {
        $( "#login-btn" ).prop('disabled', true);
        $( "#login-btn" ).html('<div class="spinner-border text-danger spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>');
    });
    </script>
@endpush