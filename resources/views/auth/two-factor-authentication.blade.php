@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session()->has('message'))
                    <p class="alert alert-info">
                        {{ session()->get('message') }}
                    </p>
                @endif
                @if ($message = Session::get('error'))
                    @include('alerts.error')
                @endif

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Two Factor Verification</h4>
                        <p class="card-text">You have received an email which contains two factor login code.
                            If you haven't received it,  <a href="{{ route('verification.two_factor.resend') }}" class="btm btn-link">{{ __('Click here to resend') }}</a>
                        </p>

                        <form method="POST" action="{{ route('verification.two_factor.store') }}">
                            @csrf

    
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input name="two_factor_code" type="text"
                                    class="form-control{{ $errors->has('two_factor_code') ? ' is-invalid' : '' }}" required
                                    autofocus placeholder="Two Factor Code">
        
                                    @if ($errors->has('two_factor_code'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('two_factor_code') }}
                                        </div>
                                    @endif
        
                                </div>
        
                                
                           
        
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-success px-4">
                                        Verify
                                    </button>
                                </div>
                                <div class="col-6">
                                    
                                </div>
        
                            </div>
                        </form>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger px-4 float-right">{{ __('logout') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
