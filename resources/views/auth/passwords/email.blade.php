@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if ($message = session('status'))
                @include('alerts.status')
            @endif
            <div class="card shadow-sm">
                <div class="card-body">
                    
                    <h4 class="card-title text-center">{{ __('Reset your password') }}</h4>
                    <p class="card-text text-center">{{ __('Enter your user account\'s email address and we will send you a password reset link.') }}</p>


                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class=" font-weight-bold"> <i class="fas fa-envelope"></i> {{ __('Email') }}</label>

                            
                                <input id="email" type="email" class="form-control shadow-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success shadow-sm w-100">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
