@foreach ($pages as $page)

    <div class="card shadow-sm mt-3">
        <div class="card-body">
            <p class="float-right"> Created: {{ $page->created_at->format('d/m/Y') }} </p>
            <h4 class="card-title"> <img src="{{ $page->logo_url }}" class="rounded-circle object-fit-cover" width="80"
                    height="80" alt=""> {{ $page->name }}</h4>
            <p class="card-text">
                <a href="{{ url('page'.$page->subdomain) }}" class="btn btn-link" target="_blank"><i class="fas fa-external-link-alt"></i> {{ url($page->subdomain) }}</a> 
                <a href="#" class="btn btn-link float-right"><i class="fas fa-cog"></i> Settings</a>
            </p>
            
        </div>
    </div>

@endforeach


</table>
@if ($pages->isEmpty())
    <div class="text-center">
        {{ __('No pages found') }}
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
