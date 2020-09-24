@extends('layouts.app')
@section('title', __('Create New Page'))

@section('content')
    <div class="container mb-5">


        @if ($message = session('status'))
            @include('alerts.status')
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

        <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data" id="page-create-form">
        @csrf
        <div class="card shadow-sm">
           
           <div class="card-body">

            <h4 class="card-title">{{ __('Create New Page') }} <button type="submit" id="page-create-btn" class="btn btn-dark shadow-sm px-4 float-right">Create Page</button></h4> 
            <p class="card-text">{{ __('Create your page and connect with your audience') }}</p>


            <ul class="nav nav-tabs" id="pageTab" role="tablist">

                <li class="nav-item w-auto" role="presentation">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
                      <i class="fas fa-info-circle"></i> {{ __('General') }}
                    </a>
                </li>

                <li class="nav-item w-auto" role="presentation">
                    <a class="nav-link" id="contact-social-tab" data-toggle="tab" href="#contact-social" role="tab" aria-controls="contact-social" aria-selected="false">
                      <i class="fas fa-phone-alt"></i> {{ __('Contact & Social media') }}
                    </a>
                </li>

                <li class="nav-item w-auto" role="presentation">
                    <a class="nav-link" id="style-tab" data-toggle="tab" href="#style" role="tab" aria-controls="style" aria-selected="false">
                      <i class="fas fa-palette"></i> {{ __('Style') }}
                    </a>
                </li>

                <li class="nav-item w-auto" role="presentation">
                    <a class="nav-link" id="options-tab" data-toggle="tab" href="#options" role="tab" aria-controls="options" aria-selected="false">
                        <i class="fas fa-sliders-h"></i> {{ __('Options') }}
                    </a>
                </li>
                <li class="nav-item w-auto" role="presentation">
                    <a class="nav-link" id="banners-tab" data-toggle="tab" href="#banners" role="tab" aria-controls="banners" aria-selected="false">
                        <i class="far fa-images"></i> {{ __('Banners') }}
                    </a>
                </li>
                
              </ul>


              <div class="tab-content" id="pageTabContent">

                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                    @include('pages.create.partials.general-tab')
                </div>
                <div class="tab-pane fade" id="contact-social" role="tabpanel" aria-labelledby="contact-social-tab">
                    @include('pages.create.partials.contact-social-tab')
                </div>
                <div class="tab-pane fade" id="style" role="tabpanel" aria-labelledby="style-tab">
                    @include('pages.create.partials.style-tab')
                </div>
                <div class="tab-pane fade" id="options" role="tabpanel" aria-labelledby="options-tab">
                    @include('pages.create.partials.options-tab')
                </div>
                <div class="tab-pane fade" id="banners" role="tabpanel" aria-labelledby="banners-tab">
                    @include('pages.create.partials.banners-tab')
                </div>

              </div>



           </div>
        </div>
    </form>
    </div>
@endsection

@push('scripts')
    <script>
        window.onbeforeunload = function (e) {
            e = e || window.event;

            // For IE and Firefox prior to version 4
            if (e) {
                e.returnValue = 'Any string';
            }

            // For Safari
            return 'Any string';
        };

    $( "#page-create-form" ).submit(function( event ) {
        $( "#page-create-btn" ).prop('disabled', true);
        $( "#page-create-btn" ).html('<div class="spinner-border text-danger spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>');
    });
    </script>
@endpush