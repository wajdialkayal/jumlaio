<button type="button" class="btn btn-primary px-4" data-toggle="modal"
    data-target="#LogoutOtherBrowserSessionsModal">
    {{ __('Logout Other Browser Sessions') }}
</button>

<div class="modal fade" id="LogoutOtherBrowserSessionsModal" tabindex="-1"
    aria-labelledby="LogoutOtherBrowserSessionsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LogoutOtherBrowserSessionsModalLabel">{{ __('Logout Other Browser Sessions') }}</h5>
            </div>
            <form action="{{ route('security.logout_other_browser_sessions') }}" method="POST" id="logout-other-browser-sessions-form">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <p>{{ __('Please enter your password to confirm you would like to logout of your other browser sessions
                        across all of your devices.') }}</p>
                    <input type="password" class="form-control shadow-sm" name="password" id="password-logout-sessions" placeholder="Password"
                        required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light border px-4" data-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary px-4" id="logout-other-browser-sessions-btn">{{ __('Logout Other Browser Sessions') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
