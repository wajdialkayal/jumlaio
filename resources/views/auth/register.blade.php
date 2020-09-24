@extends('layouts.app')
@section('title', __('Jumla - Sign up'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title text-center">{{ __('Create New Account') }}</h4>

                    <form method="POST" action="{{ route('register') }}" id="register-form">
                        @csrf

                        <div class="form-group">
                            <label for="name" class="font-weight-bold"> <i class="fas fa-user"></i> {{ __('Name') }}*</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="font-weight-bold"><i class="fas fa-envelope"></i> {{ __('Email') }}*</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="phone" class="font-weight-bold"><i class="fas fa-phone-alt"></i> {{ __('Phone') }} <small class="text-muted">{{ __('optional') }}</small></label>

                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> --}}

                        <div class="form-group">
                            <label for="password" class="font-weight-bold"><i class="fas fa-key"></i> {{ __('Password') }}*</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label for="password-confirm" class="font-weight-bold"><i class="fas fa-redo"></i> {{ __('Confirm Password') }}*</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div> --}}
                        <input type="hidden" name="timezone" id="timezone">

                        <div class="form-group">
                                <button type="submit" class="btn btn-dark w-100 shadow-sm"  id="register-btn">
                                    {{ __('Create New Account') }}
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
                        <a class="j-link" href="{{ route('login') }}">
                            {{ __('Already have an account? Login here') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $( "#register-form" ).submit(function( event ) {
            $( "#register-btn" ).prop('disabled', true);
            $( "#register-btn" ).html('<div class="spinner-border text-danger spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>');

        });
    </script>
@endpush