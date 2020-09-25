<div class="container mt-3 mb-3">
    <h5> {{ __('Banners') }}</h5>
    <p class="mb-3">A web banner or banner ad is a form of advertising on the World Wide Web delivered by an ad server.
        This form of online advertising entails embedding an advertisement into a web page. It is intended to attract
        traffic to a website by linking to the website of the advertiser.</p>

    <div class="row">
        <div class="col-md-6">
            <div class="custom-file">
                <input type="file" class="custom-file-input w-100" name="banners[]" id="banners-file" accept="image/*" multiple>
                <label class="custom-file-label" for="banners-file">Choose Banners</label>
            </div>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-light border px-4" id="btn-reset-bannners"> <i class="fas fa-redo-alt"></i> Reset</button>
        </div>
    </div>

    <div class="banner_preview">

    </div>
</div>

@push('scripts')
    <script>
        function preview_image(input) {
            var total_file = input.files.length;
            $('.banner_preview').empty()
            for (var i = 0; i < total_file; i++) {
                $('.banner_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' class='w-100 object-fit-cover mt-3 border shadow-sm' height='270'>");
                if(i == 0){
                    $('#banner_preview_side').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "' class='w-100 object-fit-cover' height='270'>");
                }
            }
        }
        $('#banners-file').on('change', function() {
            preview_image(this);
        });
        $('#btn-reset-bannners').on('click', function() {
            $('.banner_preview').empty();
            $('#banner_preview_side').empty();
            $('#banners-file').val('');
        });
    </script>
@endpush
