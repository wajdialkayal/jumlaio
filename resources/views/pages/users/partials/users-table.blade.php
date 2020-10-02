<div class="mt-4">
    <div class="row">
        <div class="col-md-4"></div><div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="inner-addon left-addon">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="form-control shadow-sm" id="search-input" placeholder="Search...">
            </div>
        </div>
    </div>
    
    <div class="table-responsive mt-2">
        <table class="table table-striped table-hover shadow-sm" >
            <thead class=" thead-dark">
                <tr>
                    <th>User</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Added</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="userTableBody">
                @foreach ($page->users as $user)
                    <tr>
                        <td>
                            <img src="{{ $user->profile_photo_url }}"
                                class="rounded-circle img-28 border object-fit-cover" alt="{{ $user->name }}">
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            <span class="badge badge-pill badge-primary p-2"> {{ $user->role_name }}</span>
                        </td>
                        <td>
                            {{  \Carbon\Carbon::parse($user->pivot->created_at)->format('d/m/Y') }}
                        </td>
                        <td>
    
                            @if (!$user->is_owner)
                                <button class="btn btn-sm btn-outline-danger remove-user-btn" id="{{ $user->id }}">Remove User</button>
                                <form action="{{ route('pages.users.destroy', [$page->id,$user->id ] ) }}" method="POST" id="remove-user-form-{{ $user->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                </form>
                            @endif
                      
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@push('scripts')
    <script>

    $('.remove-user-btn').on('click', function() {
            var _id = this.id;
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
                    $("#remove-user-form-" + _id).submit();
                    $(this).prop('disabled', true);
                    $(this).html(
                        '<div class="spinner-border text-danger spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>'
                        );
                }
            });
        });

        $("#search-input").on("input", function() {
            var value = $(this).val().toLowerCase();
            $("#userTableBody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
@endpush