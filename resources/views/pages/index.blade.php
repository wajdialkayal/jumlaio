@extends('layouts.app')
@section('title', __('My Pages'))

@section('content')
    <div class="container">


        @if ($message = session('status'))
            @include('alerts.status')
        @endif

        @foreach ($errors->all() as $message)
            @include('alerts.error')
        @endforeach


        <div class="card shadow-sm">
            <div class="card-body">
                <h4 class="card-title">{{ __('My Pages') }} <a href="{{ route('pages.create') }}" class="btn btn-outline-primary px-4 float-md-right"> <i class="fas fa-plus"></i> {{ __('Create New Page') }}</a> </h4>
                {{-- <p class="card-text">{{ __('Connect with your audience') }}</p> --}}
                @include('pages.partials.pages-table')
            </div>
        </div>

        @if ($pages->isEmpty())
            <div>
                <img src="{{ asset('images/Illustrations/create_page.svg') }}" style="width: 100%;height: auto;" alt="create-page">
            </div>
        @endif
    
    </div>
@endsection
@push('scripts')

    @if ($message = session('success'))
        @include('alerts.swal-success')
    @endif

    @if ($message = session('error'))
        @include('alerts.swal-error')
    @endif

@endpush