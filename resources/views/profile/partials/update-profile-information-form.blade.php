<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" id="profile-form">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="name" class="form-label font-weight-bold"><i class="fas fa-camera"></i> {{ __('Photo') }}</label>
        <div>
            <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}"
                class="profile-photo img-thumbnail rounded-circle" id="profile-photo">
        </div>
        <label for="profile-photo-input">
            <a class="btn btn-light border mt-3"><i class="fas fa-search"></i> {{ __('Select Photo') }}</a>
        </label>

        @if (isset($user->profile_photo_path))
            <a href="{{ route('profile.image.remove') }}" class="btn btn-light border mt-3" 
                id="btn-remove-image">{{ __('Remove Photo') }}</a>
        @endif

        <input id="profile-photo-input" type="file" name="photo" class="profile-photo-input"
            accept="image/x-png, image/jpeg, image/jpg, image/webp" value="" />
            @error('photo')
                <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <i class="fas fa-times-circle text-danger"></i> {{ $message }}
                </div>
            @enderror
    </div>

    <div class="form-group">
        <label for="name" class="form-label font-weight-bold"><i class="fas fa-user"></i> {{ __('Name') }}*</label>
        <input type="text" class="form-control shadow-sm" id="name" name="name" value="{{ $user->name }}" maxlength="255" required>
    </div>

    <div class="form-group">
        <label for="email" class="form-label font-weight-bold"><i class="fas fa-envelope"></i> {{ __('Email') }}* 
            
            @if ($user->hasVerifiedEmail())
                <i class="fas fa-check-circle text-success"></i> <small class="text-muted">{{ __('Verified') }}</small> 
            @endif
        </label>
        
        <input type="email" class="form-control shadow-sm" id="email" name="email" value="{{ $user->email }}" maxlength="255" required>
    </div>

    <div class="form-group">
        <label for="username" class="form-label font-weight-bold"><i class="fas fa-user"></i> {{ __('Username') }}*</label>
        <input type="text" class="form-control shadow-sm" id="username" name="username"
            value="{{ $user->username }}" maxlength="150" required>
    </div>

    <div class="form-group">
        <label for="phone" class="form-label font-weight-bold"><i class="fas fa-phone-alt"></i> {{ __('Phone number') }} <small class="text-muted">{{ __('optional') }}</small> </label>
        <input type="text" class="form-control shadow-sm" id="phone" name="phone"
            value="{{ $user->phone }}" maxlength="255">
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="private" class="form-label font-weight-bold"><i class="fas fa-birthday-cake"></i> {{ __('Birthday') }} <small class="text-muted">{{ __('optional') }}</small></label>
                <div class="input-group">
                    <div class="input-group-prepend shadow-sm">
                    <span class="input-group-text"> <i class="fas fa-calendar"></i> </span>
                    </div>
                    <input type="text" class="form-control shadow-sm datepicker"  value="{{ $user->birthday ? \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') : '' }}" id="datepicker" name="birthday">
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="private" class="form-label font-weight-bold"><i class="fas fa-lock"></i> {{ __('Private account') }} </label>
        <div class="custom-control custom-switch d-inline ml-3" >
            <input type="checkbox" class="custom-control-input" id="privateSwitch" name="private" @if(!$user->private) checked @endif>
            <label class="custom-control-label" for="privateSwitch"></label>
        </div>
    </div>  
    {{-- <input type="color" id="body" name="body" class="form-control"> --}}
    <button type="submit" class="btn btn-primary float-right px-4" id="profile-btn-save">{{ __('Save') }}</button>
</form>

<form id="remove-image-form" action="{{ route('profile.image.remove') }}" method="POST" class="d-none">
    @method('DELETE')
    @csrf
</form>

@push('scripts')
    <script>
        function readURL(input, image) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    image.attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#profile-photo-input").change(function() {
            readURL(this, $('#profile-photo'));
        });
        $("#btn-remove-image").click(function(event){
            event.preventDefault();
            $(this).addClass('disabled');
            $(this).html('<div class="spinner-border text-dark spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>');
            $('#remove-image-form').submit();
        });
        $( "#profile-form" ).submit(function( event ) {
            $( "#profile-btn-save" ).prop('disabled', true);
            $( "#profile-btn-save" ).html('<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only">Loading...</span></div>');

        });
        var phone_input = document.getElementById('phone');
        var keys = '0123456789+ ';
        var checkInputTel = function(e) {
            var key = (typeof e.which == "number") ? e.which : e.keyCode;
            var start = this.selectionStart,
                end = this.selectionEnd;
            var filtered = this.value.split('').filter(filterInput);
            this.value = filtered.join("");
            var move = (filterInput(String.fromCharCode(key)) || (key == 0 || key == 8)) ? 0 : 1;
            this.setSelectionRange(start - move, end - move);
        };
        var filterInput = function(val) {
            return (keys.indexOf(val) > -1);
        };
        phone_input.addEventListener('input', checkInputTel);

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            startView: "years",
            language: '{{  app()->getLocale() }}'
        });
    </script>
@endpush