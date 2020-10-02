@extends('layouts.app')
@section('title', __('Posts'))

@section('content')
    <div class="container-fluid">


        @if ($message = session('status'))
            @include('alerts.status')
        @endif

        @foreach ($errors->all() as $message)
            @include('alerts.error')
        @endforeach

        <div class="row">
            <div class="col-md-2">
             
                    @include('pages.layouts.sidebar')
              
                
            </div>

            <div class="col-md-10">

                <div class="card mt-3 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">
                           <i class="fas fa-edit"></i> Posts
                            
                            <a class="btn btn-primary float-right px-4" href="{{ route('pages.posts.create', $page->id) }}">
                                New Post
                            </a>
                        </h4>  
                        <pageposts-component page-id="{{ $page->id }}"></pageposts-component>
                        {{-- @include('pages.posts.partials.posts-table') --}}
                    </div>
                </div>

            </div>
        </div>


    </div>

    </div>
@endsection
@push('scripts')

    @if ($message = session('success'))
        @include('alerts.swal-success')
    @endif

    @if ($message = session('error'))
        @include('alerts.swal-error')
    @endif
    <script>

    </script>
@endpush
