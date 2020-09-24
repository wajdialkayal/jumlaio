<div class="alert alert-warning alert-dismissible fade show shadow-sm" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    {{ __('Please, Verify your email address') }}, 
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit"
            class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to send request') }}</button>
    </form>
</div>
    