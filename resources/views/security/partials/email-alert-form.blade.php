@if (Auth::user()->email_alert)
    <button type="button" class="btn btn-danger px-4" data-toggle="modal" data-target="#emailAlertModal">
        Disable
    </button>

@else
    <button type="button" class="btn btn-primary px-4" data-toggle="modal" data-target="#emailAlertModal">
        Enable
    </button>
@endif
<div class="modal fade" id="emailAlertModal" tabindex="-1" aria-labelledby="emailAlertModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailAlertModalLabel">{{ __('Confirm Password') }}</h5>
            </div>
            <form action="{{ route('security.email_alert.setup') }}" method="POST" id="email-alert-form">
                @method('PUT')
                @csrf

                <div class="modal-body">
                    <p> {{ __('For your security, please confirm your password to continue.') }}</p>
                    <input type="password" class="form-control shadow-sm" name="password" id="password-email-alert" placeholder="Password"
                        required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light border px-4" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary px-4" id="email-alert-confirm-btn">{{ __('Confirm') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
