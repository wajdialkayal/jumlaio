<div class="container mt-3 mb-3">
    
    <div class="form-group">
        <label for="logo" class="form-label font-weight-bold"><i class="fas fa-camera"></i> {{ __('Logo') }}</label>
        <div>
            <img src="{{ config('constants.ui_avatars_url_default') }}" alt="logo"
                class="logo-photo img-thumbnail rounded-circle" id="logo-photo">
        </div>

        <label for="logo-photo-input">
            <a class="btn btn-light border mt-3"><i class="fas fa-search"></i> {{ __('Select logo') }}</a>
        </label>

        <input id="logo-photo-input" type="file" name="logo" class="logo-photo-input"
            accept="image/x-png, image/jpeg, image/jpg, image/webp" value="" />
            <button type="button" class="btn btn-light border mt-3" 
            id="btn-reset-image">{{ __('Reset Logo') }}</button>
        @error('logo')
            <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fas fa-times-circle text-danger"></i> {{ $message }}
            </div>
        @enderror

    </div>

    
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="page_name" class="font-weight-bold">
                    {{ __('Page Name') }}* 
                    <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('Name of your brand, company, business or orgenization') }}">
                        <i class="fas fa-question-circle"></i>
                    </a> 
                </label>
                <input type="text" name="page_name" id="page_name" class="form-control shadow-sm" value="{{ old('page_name') }}" maxlength="255" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="" class="font-weight-bold"> 
                    <i class="fas fa-tag"></i> {{ __('Category') }}* 
                    <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('Category that describes what type is your page') }}">
                        <i class="fas fa-question-circle"></i>
                    </a>
                </label>
                <select class="form-contol shadow-sm"  name="categories[]" id="category-select" multiple="multiple" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ __($category->display_name) }}</option>                    
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="about" class="font-weight-bold">
            {{ __('About') }}
            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('About your brand, company, business or orgenization, will be shown in "About" page') }}">
                <i class="fas fa-question-circle"></i>
            </a> 
        </label>
       <textarea name="about" id="about" class="form-control shadow-sm">{{ old('about') }}</textarea>
    </div>

    <div class="form-group">
        <label for="short_des" class="font-weight-bold">
            {{ __('Short Description') }} 
            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('Short Description will be shown on your main page, max 255 character') }}">
                <i class="fas fa-question-circle"></i>
            </a> 
        </label>
       <textarea name="short_des" id="short_des" class="form-control shadow-sm" maxlength="255">{{ old('short_des') }}</textarea>
    </div>


    <div class="form-group">
        <label for="favicon" class="form-label font-weight-bold"><i class="fas fa-icons"></i> {{ __('Favicon') }}</label> <br>
        <p class="text-muted">A favicon is a small image file that contains one or more icons that can be used to represent a website, blog, or even a single web page. Favicons typically appear in places such as the browser's tab, address bar, browser history, bookmarks bar, etc.</p>

        <div class="mt-3">
            <img src="{{ config('constants.ui_avatars_url_default') }}" alt="favicon"
                class="favicon-photo img-thumbnail rounded-circle" id="favicon-photo">
        </div>

        <label for="favicon-photo-input">
            <a class="btn btn-light btn-sm border mt-3"><i class="fas fa-search"></i> {{ __('Select icon') }}</a>
        </label>

        <input id="favicon-photo-input" type="file" name="favicon" class="favicon-photo-input"
            accept="image/x-icon" value="" />
            <button type="button" class="btn btn-light btn-sm border mt-3" 
            id="btn-reset-favicon">{{ __('Reset icon') }}</button>
        @error('favicon')
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
        <label for="meta_title" class="font-weight-bold"> 
            {{ __('Meta title') }}
            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('max 255 character') }}">
                <i class="fas fa-question-circle"></i>
            </a>
        </label>
        <input type="text" name="meta_title" id="meta_title" class="form-control shadow-sm" value="{{ old('meta_title') }}" maxlength="255">
        <small class="text-muted">{{ __('The meta title refers to the title of a web page that is displayed both in Search Engine result snippets as well as the pages tab in browsers') }}</small>
    </div>
    
    <div class="form-group">
        <label for="meta_tag_description" class="font-weight-bold"> 
            {{ __('Meta tag description') }} 
            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('max 166 character') }}">
                <i class="fas fa-question-circle"></i>
            </a>
        </label>
        <input type="text" name="meta_tag_description" id="meta_tag_description" class="form-control shadow-sm" value="{{ old('meta_tag_description') }}" maxlength="166">
        <small class="text-muted">{{ __('The meta description tag in web pages is a snippet used to summarize a web pages content. Search engines sometimes use these snippets in search results to let visitors know what a page is about before they click on it.') }}</small>
    </div>

    <div class="form-group">
        <label for="meta_tag_keywords" class="font-weight-bold"> {{ __('Meta tag keywords') }}
            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('max 255 character, separate by comma') }}">
                <i class="fas fa-question-circle"></i>
            </a>
        </label>
        <input type="text" name="meta_tag_keywords" id="meta_tag_keywords" class="form-control shadow-sm" value="{{ old('meta_tag_keywords') }}" maxlength="255">
        <small class="text-muted">{{ __('The meta keywords help tell search engines what the topic of the page is.') }}</small>
    </div>

</div>
@push('scripts')
    <script>
        $( "#category-select" ).select2({
            theme: "bootstrap",
            width: "style",
            
        });
        function readURL(input, image) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    image.attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#logo-photo-input").change(function() {
            readURL(this, $('#logo-photo'));
            readURL(this, $('#logo-preview'));
        });

        $('#btn-reset-image').on('click', function() {
            $('#logo-photo').attr("src", "{{ config('constants.ui_avatars_url_default') }}");
            $('#logo-photo-input').val('');
            $('#logo-preview').attr("src", "{{ config('constants.ui_avatars_url_default') }}");

        });
        $("#favicon-photo-input").change(function() {
            readURL(this, $('#favicon-photo'));
            readURL(this, $('#favicon-preview'));//preview
        });

        $('#btn-reset-favicon').on('click', function() {
            $('#favicon-photo').attr("src", "{{ config('constants.ui_avatars_url_default') }}");
            $('#favicon-photo-input').val('');

            
            $('#favicon-preview').attr("src", "/favicon.ico");//preview-reset
        });
        //preview
        $("#meta_title").on("input", function() {
            $("#meta-title-preview").text($(this).val());
        });
        $("#page_name").on("input", function() {
            $("#page-name-preview").text($(this).val());
            $("#footer-page-name-preview").text($(this).val());
            $("#footer-name-preview").text($(this).val());
        });

        $("#short_des").on("input", function() {
            $("#short-des-preview").text($(this).val());
        });
    </script>
@endpush