@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('resent'))
                @php
                    $message =__('A fresh verification link has been sent to your email address.')
                @endphp
                @include('alerts.success')
            @endif

            <div class="card shadow-sm">
                

                <div class="card-body">
                    <h4 class="card-title text-center">{{ __('Verify Your Email Address') }}</h4>


                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link j-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
