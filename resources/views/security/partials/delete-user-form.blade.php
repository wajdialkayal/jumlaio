<button type="button" class="btn btn-danger px-4" data-toggle="modal" data-target="#deleteUserModal">
    {{ __('Delete Account') }}
</button>

<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">{{ __('Are you sure you want to delete your account?') }}</h5>
            </div>
            <form action="{{ route('security.user.delete') }}" method="POST" id="delete-user-form">
                @method('PUT')
                @csrf

                <div class="modal-body">
                    <p> {{__('Once your account is deleted, all of its resources and data will be permanently deleted.
                        Please enter your password to confirm you would like to permanently delete your account.')}}</p>
                    <input type="password" class="form-control shadow-sm" name="password" id="password-user-delete" placeholder="Password"
                        required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light border px-4" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-dark px-4" id="delete-user-confirm-btn">{{ __('Confirm') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
