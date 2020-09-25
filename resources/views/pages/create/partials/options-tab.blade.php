<div class="container mt-3 mb-3">

    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_number_of_followers"
                name="show_number_of_followers">
            <label class="custom-control-label" for="show_number_of_followers">Show number of followers on the main
                page</label>
        </div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_number_of_posts" name="show_number_of_posts">
            <label class="custom-control-label" for="show_number_of_posts">Show number of posts on the main page</label>
        </div>
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_total_views" name="show_total_views">
            <label class="custom-control-label" for="show_total_views">Show total views on the main page</label>
        </div>
    </div>
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