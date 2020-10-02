<div class="mt-4">
    @foreach ($pages as $page)

        <div class="card shadow-sm mt-2 w-100">
            <div class="card-body">
                
                    <div class="row">
                        <div class="col-md-5">
                            <a href="{{ route('pages.show', $page->id) }}"><img src="{{ $page->logo_url }}" class="rounded-circle border shadow-sm object-fit-cover" width="40" height="40" alt="{{ $page->name }}"> <span class="text-dark">{{ $page->name }}</span> </a>
                        </div>
                        <div class="col-md-2">
                            <small class="text-muted">{{ $page->followers_count }} follows</small>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ url('page/'.$page->subdomain) }}" class="btn btn-outline-primary btn-sm px-4" target="_blank">
                                <i class="fas fa-external-link-alt"></i> Page Link
                            </a>
                        </div>
                        <div class="col-md-1"><a href="{{ route('pages.show', $page->id) }}" class="btn btn-link float-right"><i class="fas fa-cog"></i></a></div>
                    </div>
            </div>
        </div>
    @endforeach
</div>

@if ($pages->isEmpty())
    <div class="text-center">
        <h5>{{ __('Create Your first Page') }}</h5>
    </div>
@endif

@push('scripts')
    <script>
        $('.delete-btn').on('click', function() {
            var page_id = this.id;
            Swal.fire({
                title: "{{ __('Are you sure?') }}",
                text: "{{ __('You wont be able to revert this!') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                focusCancel: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $("#delete-page-form-" + page_id).submit();
                    $(this).prop('disabled', true);
                    $(this).html(
                        '<div class="spinner-border text-danger spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>'
                        );
                }
            });
        });

    </script>
@endpush
