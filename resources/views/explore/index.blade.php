@extends('layouts.app')
@section('title', __('Explore'))

@section('content')



        @if ($message = session('status'))
            @include('alerts.status')
        @endif

        @if (session('resent'))
            @php
                $message = __('we send you a verification link')
            @endphp
            @include('alerts.status')
        @endif

        {{-- @if (Auth::check() && !Auth::user()->hasVerifiedEmail())
            @include('alerts.email-verify')
        @endif --}}

      
        @foreach ($errors->all() as $message)
            @include('alerts.error')
        @endforeach
      
        <div class="row justify-content-center">
            <div class="col-md-5">
                
                @foreach ($pages as $page)
                    <div class="card shadow-sm">
                        <div class="card-body">

                           <table>
                               <tbody>
                                <tr>
                                    <td class=" align-middle"><img src="{{ $page->logo_url }}" class="rounded-circle object-fit-cover border" width="60" height="60" alt=""></td>
                                    <td class="align-middle px-2">
                                        <h4 class=" font-weight-bold">{{ $page->name }}</h4>
                                        <small class="text-muted">
                                            @foreach ($page->categories as $category)
                                                {{ $category->display_name }} @if (!$loop->last) / @endif
                                            @endforeach
                                        </small>
                                </td>
                                </tr>
                               </tbody>
                           </table>

                        
                            <p class="card-text">{{ $page->short_description }}</p>

                            <a class="btn btn-light btn-sm border px-4 float-right" href="{{ url('page') }}/{{ $page->subdomain }}" role="button">View Page</a>
                        </div>
                    </div>
                @endforeach

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

@endpush