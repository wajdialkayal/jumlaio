@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">

                <div class="card-body">
                    <h4 class="card-title text-center">{{ __('Change password for') }} {{ $email }}</h4>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email" class="font-weight-bold"> <i class="fas fa-envelope"></i> {{ __('Email') }}</label>

                                <input id="email" type="email" class="form-control shadow-sm @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="font-weight-bold"><i class="fas fa-key"></i> {{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control shadow-sm @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="font-weight-bold"><i class="fas fa-redo"></i> {{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control shadow-sm" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-success shadow-sm w-100">
                                    {{ __('Reset Password') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
