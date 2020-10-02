
<div class="container mt-3 mb-3">

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapsFontStyle" aria-expanded="false" aria-controls="collapsFontStyle"> {{ __('Font Style') }}</h5>

    <div class="collapse" id="collapsFontStyle">
        <div class="form-group">
            <label for="page_font" class="font-weight-bold"> {{ __('Page Font Style') }}</label>
        <select name="page_font" id="page_font" class="form-control">
                @foreach ($fonts as $font)
                    <option value="{{ $font->name }}" style="font-family: {{ $font->name }}">{{ $font->name }}  </option>
                @endforeach
        </select>
        </div>
    </div>

    <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapsBodyBgColor" aria-expanded="false" aria-controls="collapsBodyBgColor"> {{ __('Page Background') }}</h5>
    
    <div class="collapse" id="collapsBodyBgColor">
        <div class="form-group">
            <label for="body_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Page Background Color') }}</label>
            <input type="color" name="body_bg_color" id="body_bg_color" class="form-control shadow-sm w-100" value="{{old('body_bg_color') ? old('body_bg_color') : '#FFFFFF'}}">
        </div>

        <div class="form-group">
            <label for="body_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Page Text Color') }}</label>
            <input type="color" name="body_text_color" id="body_text_color" class="form-control shadow-sm w-100" value="{{old('body_text_color') ? old('body_text_color') : '#111111'}}">
        </div>
    </div>

    <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseTopBar" aria-expanded="false" aria-controls="collapseTopBar"> {{ __('Top bar') }}</h5>

    <div class="collapse" id="collapseTopBar">
        <p class="mb-3">"Top Bar" or "Navigation bar" is a section of a graphical user interface intended to aid visitors in accessing information</p>
        
        <div class="form-group">
            <label for="topbar_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Top Bar Text Color') }}</label>
            <input type="color" name="topbar_text_color" id="topbar_text_color" class="form-control shadow-sm w-100" value="{{old('topbar_text_color') ? old('topbar_text_color') : '#FFFFFF'}}">
        </div>

        <div class="form-group">
            <label for="topbar_text_color_hover" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Top Bar Text Color on hover') }}</label>
            <input type="color" name="topbar_text_color_hover" id="topbar_text_color_hover" class="form-control shadow-sm w-100" value="{{old('topbar_text_color_hover') ? old('topbar_text_color_hover') : '#FF0000'}}">
        </div>

        <div class="form-group">
            <label for="topbar_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Top Bar background color') }}</label>
            <input type="color" name="topbar_bg_color" id="topbar_bg_color" class="form-control shadow-sm w-100" value="{{old('topbar_bg_color') ? old('topbar_bg_color') : config('constants.default_primary_color') }}">
        </div>

    </div>

   
    <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseMBar" aria-expanded="false" aria-controls="collapseMBar"> {{ __('Middle bar') }}</h5>

    <div class="collapse" id="collapseMBar">
        <p class="mb-3">Middle bar is the section where your logo and short description will be shown</p>

        <div id="mbar-section">
            <div class="form-group">
                <label for="mbar_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Middle-bar text color') }}</label>
                <input type="color" name="mbar_text_color" id="mbar_text_color" class="form-control shadow-sm w-100" value="{{old('mbar_text_color') ? old('mbar_text_color') : config('constants.default_primary_color') }}">
            </div>
        
            <div class="form-group">
                <label for="mbar_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Middle-bar background color') }}</label>
                <input type="color" name="mbar_bg_color" id="mbar_bg_color" class="form-control shadow-sm w-100" value="{{old('mbar_bg_color') ? old('mbar_bg_color') : '#FFFFFF'}}">
            </div>
        </div>
    </div>
    
    <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseMBackToTopBtn" aria-expanded="false" aria-controls="collapseMBackToTopBtn"> {{ __('Back to top button') }}</h5>

    <div class="collapse" id="collapseMBackToTopBtn">
        <p class="mb-3">"Back to top" allows users to smoothly scroll back to the top of the page. It's a little detail which enhances navigation experience on website with long pages. If users keeps on scrolling, the button nicely reduces its opacity to be less distracting during navigation.</p>

        
        <div id="btt-section">
            <div class="form-group">
                <label for="back_to_top_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Back to top button color') }}</label>
                <input type="color" name="back_to_top_color" id="back_to_top_color" class="form-control shadow-sm w-100" value="{{old('back_to_top_color') ? old('back_to_top_color') : '#FFFFFF'}}">
            </div>

            <div class="form-group">
                <label for="back_to_top_color_hover" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Back to top button color on hover') }}</label>
                <input type="color" name="back_to_top_color_hover" id="back_to_top_color_hover" class="form-control shadow-sm w-100" value="{{old('back_to_top_color_hover') ? old('back_to_top_color_hover') : '#FFFFFF'}}">
            </div>

            <div class="form-group">
                <label for="back_to_top_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Back to top button background color') }}</label>
                <input type="color" name="back_to_top_bg_color" id="back_to_top_bg_color" class="form-control shadow-sm w-100" value="{{old('back_to_top_bg_color') ? old('back_to_top_bg_color') : config('constants.default_primary_color')}}">
            </div>

            <div class="form-group">
                <label for="back_to_top_bg_color_hover" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Back to top button background color on hover') }}</label>
                <input type="color" name="back_to_top_bg_color_hover" id="back_to_top_bg_color_hover" class="form-control shadow-sm w-100" value="{{old('back_to_top_bg_color_hover') ? old('back_to_top_bg_color_hover') : config('constants.default_primary_color')}}">
            </div>
        </div>
    </div>

    {{-- <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseScrollBar" aria-expanded="false" aria-controls="collapseScrollBar"> {{ __('Scrollbar') }}</h5>

    <div class="collapse" id="collapseScrollBar">
        <p class="mb-3">Scrollbar is a long thin section at the edge of a computer display by which material can be scrolled using a mouse.</p>


        <div id="scrollbar-section">
            <div class="form-group">
                <label for="scrollbar_trak_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Trak color') }}</label>
                <input type="color" name="scrollbar_trak_color" id="scrollbar_trak_color" class="form-control shadow-sm w-100" value="{{old('scrollbar_trak_color') ? old('scrollbar_trak_color') : '#FFFFFF'}}">
            </div>
        
            <div class="form-group">
                <label for="scrollbar_handle_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Scrollbar handle color') }}</label>
                <input type="color" name="scrollbar_handle_color" id="scrollbar_handle_color" class="form-control shadow-sm w-100" value="{{old('scrollbar_handle_color') ? old('scrollbar_handle_color') : config('constants.default_primary_color')}}">
            </div>
        
            <div class="form-group">
                <label for="scrollbar_hover_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Scrollbar Hover color') }}</label>
                <input type="color" name="scrollbar_hover_color" id="scrollbar_hover_color" class="form-control shadow-sm w-100" value="{{old('scrollbar_hover_color') ? old('scrollbar_hover_color') : '#EC1D25'}}">
            </div>

            <div class="form-group">
                <label for="scrollbar_width" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Scrollbar Width') }}</label>
                <input type="number" name="scrollbar_width" min="5" step="1" id="scrollbar_width" class="form-control shadow-sm w-100" value="{{old('scrollbar_width') ? old('scrollbar_width') : 10}}">
            </div>
        </div>
    </div> --}}
    
    <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseButton" aria-expanded="false" aria-controls="collapseButton"> {{ __('Buttons') }}</h5>

    <div class="collapse" id="collapseButton">
        <div class="form-group">
            <label for="btn_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Button background color') }}</label>
            <input type="color" name="btn_bg_color" id="btn_bg_color" class="form-control shadow-sm w-100" value="{{old('btn_bg_color') ? old('btn_bg_color') : config('constants.default_primary_color')}}">
        </div>

        <div class="form-group">
            <label for="btn_bg_color_hover" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Button background color on hover') }}</label>
            <input type="color" name="btn_bg_color_hover" id="btn_bg_color_hover" class="form-control shadow-sm w-100" value="{{old('btn_bg_color_hover') ? old('btn_bg_color_hover') : config('constants.default_primary_color')}}">
        </div>

        <div class="form-group">
            <label for="btn_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Button text color') }}</label>
            <input type="color" name="btn_text_color" id="btn_text_color" class="form-control shadow-sm w-100" value="{{old('btn_text_color') ? old('btn_text_color') : '#FFFFFF'}}">
        </div>

        <div class="form-group">
            <label for="btn_text_color_hover" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Button text color on hover') }}</label>
            <input type="color" name="btn_text_color_hover" id="btn_text_color_hover" class="form-control shadow-sm w-100" value="{{old('btn_text_color_hover') ? old('btn_text_color_hover') : '#FFFFFF'}}">
        </div>

        <div class="form-group">
            <label for="btn_style" class="font-weight-bold">{{ __('Button Style') }}</label>
            <select name="btn_style" id="btn_style" class="form-control shadow-sm w-100">
                <option value="normal">Normal</option>
                <option value="rounded">Rounded</option>
            </select>
        </div>
    </div>
       
    <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseCardStyle" aria-expanded="false" aria-controls="collapseCardStyle"> {{ __('Card') }}</h5>

    <div class="collapse" id="collapseCardStyle">
        <p class="mb-3">"Card" is where page posts will be shown </p>

        <div class="form-group">
            <label for="card_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Card background color') }}</label>
            <input type="color" name="card_bg_color" id="card_bg_color" class="form-control shadow-sm w-100" value="{{old('card_bg_color') ? old('card_bg_color') : '#FFFFFF'}}">
        </div>

        <div class="form-group">
            <label for="card_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Card text color') }}</label>
            <input type="color" name="card_text_color" id="card_text_color" class="form-control shadow-sm w-100" value="{{old('card_text_color') ? old('card_text_color') : '#111111' }}">
        </div>

        <div class="form-group">
            <label for="card_shadow" class="font-weight-bold"> <i class="fas fa-adjust"></i> {{ __('Card shadow') }}</label>
            <select name="card_shadow" id="card_shadow" class="form-control w-100 shadow-sm">
                <option value="shadow-none">None</option>
                <option value="shadow-sm" selected>Small</option>
                <option value="shadow">Medium</option>
                <option value="shadow-lg">Large</option>
            </select>
        </div>
    </div>

    <hr>

    <h5 class="panel-title prevent-selection p-2"  data-toggle="collapse" data-target="#collapseFooterStyle" aria-expanded="false" aria-controls="collapseFooterStyle"> {{ __('Footer') }}</h5>

    <div class="collapse" id="collapseFooterStyle">
        <p class="mb-3">Footer is an area located at the bottom of every page on a website, below the main body content. </p>
        
        <div class="form-group">
            <label for="footer_text" class="font-weight-bold">{{ __('Footer text') }} 
                <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="{{ __('max 255 charecter') }}">
                    <i class="fas fa-question-circle"></i>
                </a>
            </label>
            <textarea name="footer_text" id="footer_text" class="form-control shadow-sm" maxlength="255">{{ old('footer_text') }}</textarea>
        </div>

        <div class="form-group">
            <label for="footer_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Footer text color') }}</label>
            <input type="color" name="footer_text_color" id="footer_text_color" class="form-control shadow-sm w-100" value="{{old('footer_text_color') ? old('footer_text_color') : '#FFFFFF'}}">
        </div>

        <div class="form-group">
            <label for="footer_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Footer background color') }}</label>
            <input type="color" name="footer_bg_color" id="footer_bg_color" class="form-control shadow-sm w-100" value="{{old('footer_bg_color') ? old('footer_bg_color') : config('constants.default_primary_color')}}">
        </div>
    </div>
</div>



@push('scripts')
    <script>
    /* ==========================['Body']========================== */
    $('#body_bg_color').on("input",function() {
        $('#body-preview').css("background-color", $(this).val());
    });

    $('#body_text_color').on("input",function() {
        $('#body-text-preview').css("color", $(this).val());
    });

    $('#page_font').change(function() {
        $('#web-page-preview').css("font-family", $(this).val());
    });

    /* ==========================['Topbar']========================== */
    $('#topbar_bg_color').on("input",function() {
        $('#topbar-preview').css("background-color", $(this).val());
    });

    $('#topbar_text_color').on("input",function() {
        $('#topbar-preview').css("color", $(this).val());
        $('.nav-link-preview').css("color", $(this).val());
    });

    $('#topbar_text_color_hover').on("input",function() {
        $('.nav-link-preview').mouseover(function(){
            $('.nav-link-preview').css("color", $('#topbar_text_color_hover').val());
        }).mouseout(function() {
            $('.nav-link-preview').css("color", $('#topbar_text_color').val());
        });
    });

    /* ==========================['Middle Bar']========================== */
    $('#mbar_text_color').on("input",function() {
        $('#mbar-preview').css("color", $(this).val());
    });
    $('#mbar_bg_color').on("input",function() {
        $('#mbar-preview').css("background-color", $(this).val());
    });


    /* ==========================['Card']========================== */
    $('#card_bg_color').on("input",function() {
        $('#card-preview').css("background-color", $(this).val());
    });

    $('#card_text_color').on("input",function() {
        $('#card-preview').css("color", $(this).val());
    });

    $('#card_shadow').change(function() {
        $("#card-preview").removeClass();
        $('#card-preview').addClass('card');
        $('#card-preview').addClass($(this).val());
    });

    /* ==========================['button']========================== */
    $('#btn_text_color').on("input",function() {
        $('.btn-preview').css("color", $(this).val());
    });
    $('#btn_bg_color').on("input",function() {
        $('.btn-preview').css("background-color", $(this).val());
    });
    $('#btn_style').change(function() {
        if($(this).val() == 'rounded'){
            $('.btn-preview').css("border-radius", '25px');
        }else{
            $('.btn-preview').css("border-radius", '0px');
        }
    });

    $('#btn_bg_color_hover').on("input",function() {
        $('.btn-preview').mouseover(function(){
            $('.btn-preview').css("background-color", $('#btn_bg_color_hover').val());
        }).mouseout(function() {
            $('.btn-preview').css("background-color", $('#btn_bg_color').val());
        });
    });

    $('#btn_text_color_hover').on("input",function() {
        $('.btn-preview').mouseover(function(){
            $('.btn-preview').css("color", $('#btn_text_color_hover').val());
        }).mouseout(function() {
            $('.btn-preview').css("color", $('#btn_text_color').val());
        });
    });

    /* ==========================['Scrollbar']========================== */

    // $('#scrollbar_trak_color').on("input", function() {
    //     $('.browser-preview').css("::-webkit-scrollbar", $(this).val());
    // });

    // $('#scrollbar_default').change(function() {
    //     if(this.checked) {
    //         $('#scrollbar-section').hide();
    //     }else{
    //         $('#scrollbar-section').show();
    //     }
    // });

    /* ==========================['Footer']========================== */
    $("#footer_text").on("input", function() {
            $("#footer-text-preview").text($(this).val());
    });

    $('#footer_bg_color').on("input",function() {
        $('#footer-preview').css("background-color", $(this).val());
    });

    $('#footer_text_color').on("input",function() {
        $('.footer-link-preview').css("color", $(this).val());
    });

    /* ==========================['Back to top button']========================== */
    $('#back_to_top_color').on("input",function() {
        $('#btn-back-to-top-preview').css('color', $(this).val());
    });

    $('#back_to_top_bg_color').on("input",function() {
        $('#btn-back-to-top-preview').css('background-color', $(this).val());
    });

    $('#back_to_top_color_hover').on("input",function() {
        $('#btn-back-to-top-preview').mouseover(function(){
            $('#btn-back-to-top-preview').css("color", $('#back_to_top_color_hover').val());
        }).mouseout(function() {
            $('#btn-back-to-top-preview').css("color", $('#back_to_top_color').val());
        });
    });

    $('#back_to_top_bg_color_hover').on("input",function() {
        $('#btn-back-to-top-preview').mouseover(function(){
            $('#btn-back-to-top-preview').css("background-color", $('#back_to_top_bg_color_hover').val());
        }).mouseout(function() {
            $('#btn-back-to-top-preview').css("background-color", $('#back_to_top_bg_color').val());
        });
    });

    
    
    </script>
@endpush