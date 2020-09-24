@if (Auth::user()->two_factor_auth)
    <button type="button" class="btn btn-danger px-4" data-toggle="modal"
        data-target="#twoFactorAuthenticationModal">
        Disable
    </button>

@else
    <button type="button" class="btn btn-dark px-4" data-toggle="modal"
        data-target="#twoFactorAuthenticationModal">
        Enable
    </button>
@endif
<div class="modal fade" id="twoFactorAuthenticationModal" tabindex="-1"
    aria-labelledby="twoFactorAuthenticationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="twoFactorAuthenticationModalLabel">Confirm Password</h5>
            </div>
            <form action="{{ route('security.two_factor_authentication.setup') }}" method="POST" id="two-factor-auth-form">
                @method('PUT')
                @csrf

                <div class="modal-body">
                    <p> {{ __('For your security, please confirm your password to continue.') }}</p>
                    <input type="password" class="form-control shadow-sm" name="password" id="password-two-factor-auth" placeholder="{{ __('Password') }}"
                        required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light border px-4" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-dark px-4" id="two-factor-auth-confirm-btn">{{ __('Confirm') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
