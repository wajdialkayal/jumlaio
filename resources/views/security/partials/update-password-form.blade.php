<form action="{{ route('security.password.update') }}" method="POST" id="security-password-update-form">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="current_password" class="font-weight-bold">{{ __('Current Password') }}</label>
        <input type="password" class="form-control shadow-sm @error('current_password') is-invalid  @enderror" id="current_password" name="current_password" required>
        @error('current_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="new_password" class="font-weight-bold">{{ __('New Password') }}</label>
        <input type="password" class="form-control shadow-sm @error('new_password') is-invalid  @enderror" id="new_password" name="new_password" required>
        @error('new_password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="new_password_confirmation" class="font-weight-bold">{{ __('Confirm Password') }}</label>
        <input type="password" class="form-control shadow-sm @error('new_password_confirmation') is-invalid  @enderror" id="new_password_confirmation" name="new_password_confirmation" required>
        @error('new_password_confirmation')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary px-4" id="security-password-update-save-btn">{{ __('Save') }}</button>
</form>
