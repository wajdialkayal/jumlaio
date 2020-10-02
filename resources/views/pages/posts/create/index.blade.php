@extends('layouts.app')
@section('title', __('Posts'))
@push('styles')
@endpush
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

            <div class="col-md-10 settings-col border shadow-sm">

                <div class="card mt-3 shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title"> <a href="{{ URL::previous() }}" class="btn btn-light btn-circle border"> <i class="fas fa-arrow-left fa-1x"></i> </a> Create New Post</h4>
                        
                        @include('pages.posts.create.partials.create-form')
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

$('#post-create-textarea').summernote({
    placeholder: 'Hello stand alone ui',
    tabsize: 2,
    height: 500,
    codeviewFilter: true,
    codeviewIframeFilter: true,
    hint: {
          words: ['apple', 'orange', 'watermelon', 'lemon'],
          match: /\b(\w{1,})$/,
          search: function (keyword, callback) {
          callback($.grep(this.words, function (item) {
              return item.indexOf(keyword) === 0;
          }));
          }
      },
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline','strikethrough', 'superscript', 'subscript', 'clear']],
      ['fontsize', ['fontsize']],
      ['fontname', ['fontname']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']],
      ['height', ['height']]
    ]
  });
       
   
      </script>

@endpush
