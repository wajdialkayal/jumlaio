<div class="container mt-3 mb-3">

    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_mbar"
                name="show_mbar" checked>
            <label class="custom-control-label" for="show_mbar"> {{ __('Show middle bar') }}</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_back_to_top_btn"
                name="show_back_to_top_btn" checked>
            <label class="custom-control-label" for="show_back_to_top_btn"> {{ __('Show back to top button') }}</label>
        </div>
    </div>

    {{-- <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="scrollbar_default"
                name="scrollbar_default">
            <label class="custom-control-label" for="scrollbar_default"> {{ __('Use default scrollbar') }}</label>
        </div>
    </div> --}}


    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_navbar_social_links"
                name="show_navbar_social_links" checked>
            <label class="custom-control-label" for="show_navbar_social_links">Show top bar links</label>
        </div>
    </div>

    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_footer_social_links"
                name="show_footer_social_links" checked>
            <label class="custom-control-label" for="show_footer_social_links">Show footer links</label>
        </div>
    </div>

</div>
@push('scripts')
    <script>

        $('#show_mbar').change(function() {
            if(this.checked) {
                $('#mbar-section').fadeIn();
                $('#mbar-preview').fadeIn();
            }else{
                $('#mbar-section').fadeOut();
                $('#mbar-preview').fadeOut();
            }
        });
        $('#show_back_to_top_btn').change(function() {
            if(this.checked) {
                $('#btt-section').fadeIn();
                $('.btn-back-to-top-preview').fadeIn();
            }else{
                $('#btt-section').fadeOut();
                $('.btn-back-to-top-preview').fadeOut();

            }
        });
        $('#show_navbar_social_links').change(function(){
            if(this.checked){
                $('#topbar-links-preview').fadeIn();
            }else{
                $('#topbar-links-preview').fadeOut();
            }
        });

        $('#show_footer_social_links').change(function(){
            if(this.checked){
                $('#footer-links-preview').fadeIn();
            }else{
                $('#footer-links-preview').fadeOut();
            }
        });
    </script>
@endpush