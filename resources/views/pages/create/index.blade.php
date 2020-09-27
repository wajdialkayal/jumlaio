@extends('layouts.app')
@section('title', __('Create New Page'))

@section('content')
    <div class="container-fluid">


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


        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data" id="page-create-form">
                    @csrf
                    <div class="card shadow-sm">
                       
                       <div class="card-body">
            
                        <h4 class="card-title">{{ __('Create New Page') }} </h4> 
                        <p class="card-text">{{ __('Create your page and connect with your audience') }}</p>
            
            
                        <ul class="nav nav-tabs justify-content-center" id="pageTab" role="tablist">
            
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-circle btn-light border m-2 active"  data-popover="tooltip" data-placement="top" title="{{ __('General') }}" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
                                  <i class="fas fa-info-circle vertical-align-middle"></i>
                                </a>
                            </li>
            
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-circle btn-light border m-2"  data-popover="tooltip" data-placement="top" title="{{ __('Contact & Social Media') }}" id="contact-social-tab" data-toggle="tab" href="#contact-social" role="tab" aria-controls="contact-social" aria-selected="false">
                                  <i class="fas fa-phone-alt vertical-align-middle"></i>
                                </a>
                            </li>
            
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-circle btn-light border m-2"  data-popover="tooltip" data-placement="top" title="{{ __('Style') }}" id="style-tab" data-toggle="tab" href="#style" role="tab" aria-controls="style" aria-selected="false">
                                  <i class="fas fa-palette vertical-align-middle"></i>
                                </a>
                            </li>
            
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-circle btn-light border m-2"  data-popover="tooltip" data-placement="top" title="{{ __('Options') }}" id="options-tab" data-toggle="tab" href="#options" role="tab" aria-controls="options" aria-selected="false">
                                    <i class="fas fa-sliders-h vertical-align-middle"></i>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="btn btn-circle btn-light border m-2"  data-popover="tooltip" data-placement="top" title="{{ __('Banners') }}" id="banners-tab" data-toggle="tab" href="#banners" role="tab" aria-controls="banners" aria-selected="false">
                                    <i class="far fa-images vertical-align-middle"></i>
                                </a>
                            </li>
                            
                          </ul>
            
            
                          <div class="tab-content create-page-tab" id="pageTabContent">
            
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
                       <div class="card-footer border-0">
                            <button type="submit" id="page-create-btn" class="btn btn-primary shadow-sm px-4 float-right w-100">Create Page</button>
                       </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                @include('pages.create.partials.preview')
            </div>
        </div>

                

{{-- 
                <button type="button" class="btn btn-primary modal-preview-btn fixed-bottom m-5 px-4" data-toggle="modal" data-target="#previewModal">
                    Preview
                </button> --}}

               


    </div>
@endsection

@push('scripts')
    <script>
        var hook = true;
        window.onbeforeunload = function() {
            if (hook) {
                return "Did you save your stuff?"
            }
        }
        function unhook() {
            hook = false;
        }
    $( "#page-create-form" ).submit(function( event ) {
        unhook();
        $( "#page-create-btn" ).prop('disabled', true);
        $( "#page-create-btn" ).html('<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>');
    });
    </script>
@endpush