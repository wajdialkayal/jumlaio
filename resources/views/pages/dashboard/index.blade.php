@extends('layouts.app')
@section('title', __('Dashboard'))

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

                @include('pages.dashboard.partials.cards')

                
            <canvas id="myChart"></canvas>
            {{ $page }}

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
        var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});
    </script>
@endpush
