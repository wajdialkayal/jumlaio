@extends('layouts.app')
@section('title', __('User Manager'))

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

            <div class="col-md-10 shadow-sm">

                <div class="card mt-3 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">
                           <i class="fas fa-user-cog"></i> User Manager
                            
                            <button type="button" class="btn btn-primary float-right px-4" data-toggle="modal" data-target="#addUserModal">
                               <i class="fas fa-user-plus"></i> Add User
                              </button>
                        </h4>  
                        
                        @include('pages.users.partials.users-table')
                    </div>
                </div>

            </div>
        </div>


    </div>
    @include('pages.users.partials.add-user-modal')

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
