<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Add user to this page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('pages.users.store', $page->id) }}" method="POST">
               
            <div class="modal-body">
             

                @csrf
                
                <p>Assign user to help managing page</p>
                <div class="form-group">
                  <label for=""></label>
                  <input type="email" class=" form-control shadow-sm" name="email" id="user-email-input"
                  placeholder="Enter user email address" maxlength="255" required>
                  <small class="text-danger" id="error-message"> <i class="fas fa-times-circle"></i>  user not found</small>
                  <small class="text-success" id="success-message"><i class="fas fa-check-circle"></i>  user found</small>
                </div>

                    <div class="form-group mt-3">
                        <label for="role_id">Role <a href="#">role help</a></label> 
                        <select class="form-control shadow-sm" name="role_id" id="role_id">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light px-4" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary px-4" id="add-user-btn" disabled>Add User</button>
            </div>
            
                </form>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#error-message').hide();
        $('#success-message').hide();
        function delay(fn, ms) {
            let timer = 0
            return function(...args) {
                clearTimeout(timer)
                timer = setTimeout(fn.bind(this, ...args), ms || 0)
            }
        }
        $('#user-email-input').on('keyup', delay( function() {
            var _url = '{{ route("users.search", ":email") }}';
            _url = _url.replace(':email', $(this).val());
            console.log($(this).val())
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "GET",
                url: _url,

                success: function(response) {
                    $('#add-user-btn').prop('disabled', false);
                    $('#error-message').hide();
                    $('#success-message').show();
                    $('#user-email-input').addClass('is-valid');
                    $('#user-email-input').removeClass('is-invalid');
                },
                error: function() {
                    $('#add-user-btn').prop('disabled', true);
                    $('#error-message').show();
                    $('#success-message').hide();
                    $('#user-email-input').addClass('is-invalid');
                    $('#user-email-input').removeClass('is-valid');
                }
            });

        }, 200));

    </script>
@endpush
