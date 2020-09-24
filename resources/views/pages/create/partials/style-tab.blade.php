
<div class="container mt-3 mb-3">

    <div class="form-group">
        <label for="page_font" class="font-weight-bold"> {{ __('Page Font Style') }}</label>
       <select name="page_font" id="page_font" class="form-control">
            @foreach ($fonts as $font)
                <option value="{{ $font->name }}" style="font-family: {{ $font->name }}">{{ $font->name }}  </option>
            @endforeach
       </select>
    </div>

    <hr>

    <h5> {{ __('Page Background') }}</h5>
    <div class="form-group">
        <label for="body_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Page Background Color') }}</label>
        <input type="color" name="body_bg_color" id="body_bg_color" class="form-control shadow-sm w-25" value="{{old('body_bg_color') ? old('body_bg_color') : '#FFFFFF'}}">
    </div>

    <hr>

    <h5> {{ __('Top bar') }}</h5>
    <p class="mb-3">"Top Bar" or "Navigation bar" is a section of a graphical user interface intended to aid visitors in accessing information</p>
    
    <div class="form-group">
        <label for="topbar_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Top Bar Text Color') }}</label>
        <input type="color" name="topbar_text_color" id="topbar_text_color" class="form-control shadow-sm w-25" value="{{old('topbar_text_color') ? old('topbar_text_color') : '#FFFFFF'}}">
    </div>

    <div class="form-group">
        <label for="topbar_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Top Bar background color') }}</label>
        <input type="color" name="topbar_bg_color" id="topbar_bg_color" class="form-control shadow-sm w-25" value="{{old('topbar_bg_color') ? old('topbar_bg_color') : '#111111'}}">
    </div>

   
    <hr>
    <h5> {{ __('Middle bar') }}</h5>
    <p class="mb-3">Middle bar is the section where your logo and short description will be shown</p>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="show_mbar" checked>
        <label class="form-check-label" for="show_mbar">
          {{ __('Show middle bar') }}
        </label>
    </div>

    <div id="mbar-section">
        <div class="form-group">
            <label for="mbar_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Middle-bar text color') }}</label>
            <input type="color" name="mbar_text_color" id="mbar_text_color" class="form-control shadow-sm w-25" value="{{old('mbar_text_color') ? old('mbar_text_color') : '#111111'}}">
        </div>
    
        <div class="form-group">
            <label for="mbar_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Middle-bar background color') }}</label>
            <input type="color" name="mbar_bg_color" id="mbar_bg_color" class="form-control shadow-sm w-25" value="{{old('mbar_bg_color') ? old('mbar_bg_color') : '#FFFFFF'}}">
        </div>
    </div>
    

   
    <hr>
    <h5> {{ __('Back to top button') }}</h5>
    <p class="mb-3">"Back to top" allows users to smoothly scroll back to the top of the page. It's a little detail which enhances navigation experience on website with long pages. If users keeps on scrolling, the button nicely reduces its opacity to be less distracting during navigation.</p>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="show_back_to_top_btn" checked>
        <label class="form-check-label" for="show_back_to_top_btn">
          {{ __('Show back to top button') }}
        </label>
    </div>
    <div id="btt-section">
        <div class="form-group">
            <label for="back_to_top_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Back to top button color') }}</label>
            <input type="color" name="back_to_top_color" id="back_to_top_color" class="form-control shadow-sm w-25" value="{{old('back_to_top_color') ? old('back_to_top_color') : '#FFFFFF'}}">
        </div>

        <div class="form-group">
            <label for="back_to_top_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Back to top button background color') }}</label>
            <input type="color" name="back_to_top_bg_color" id="back_to_top_bg_color" class="form-control shadow-sm w-25" value="{{old('back_to_top_bg_color') ? old('back_to_top_bg_color') : '#111111'}}">
        </div>
    </div>

    <hr>

    <h5> {{ __('Scrollbar') }}</h5>
    <p class="mb-3">Scrollbar is a long thin section at the edge of a computer display by which material can be scrolled using a mouse.</p>

    <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" value="" id="scrollbar_default">
        <label class="form-check-label" for="scrollbar_default">
          {{ __('Use default scrollbar') }}
        </label>
    </div>
    <div id="scrollbar-section">
        <div class="form-group">
            <label for="scrollbar_trak_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Trak color') }}</label>
            <input type="color" name="scrollbar_trak_color" id="scrollbar_trak_color" class="form-control shadow-sm w-25" value="{{old('scrollbar_trak_color') ? old('scrollbar_trak_color') : '#FFFFFF'}}">
        </div>
    
        <div class="form-group">
            <label for="scrollbar_handle_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Scrollbar handle color') }}</label>
            <input type="color" name="scrollbar_handle_color" id="scrollbar_handle_color" class="form-control shadow-sm w-25" value="{{old('scrollbar_handle_color') ? old('scrollbar_handle_color') : '#111111'}}">
        </div>
    
        <div class="form-group">
            <label for="scrollbar_hover_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Scrollbar Hover color') }}</label>
            <input type="color" name="scrollbar_hover_color" id="scrollbar_hover_color" class="form-control shadow-sm w-25" value="{{old('scrollbar_hover_color') ? old('scrollbar_hover_color') : '#EC1D25'}}">
        </div>
    </div>
    


    <hr>
    <h5> {{ __('Buttons') }}</h5>


    <div class="form-group">
        <label for="btn_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Button background color') }}</label>
        <input type="color" name="btn_bg_color" id="btn_bg_color" class="form-control shadow-sm w-25" value="{{old('btn_bg_color') ? old('btn_bg_color') : '#111111'}}">
    </div>

    <div class="form-group">
        <label for="btn_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Button text color') }}</label>
        <input type="color" name="btn_text_color" id="btn_text_color" class="form-control shadow-sm w-25" value="{{old('btn_text_color') ? old('btn_text_color') : '#FFFFFF'}}">
    </div>

    <div class="form-group">
        <label for="btn_text_color" class="font-weight-bold">{{ __('Button Style') }}</label>
        <select name="btn_style" id="btn_style" class="form-control shadow-sm w-25">
            <option value="normal">Normal</option>
            <option value="rounded">Rounded</option>
        </select>
    </div>
       

    <hr>
    <h5> {{ __('Card') }}</h5>
    <p class="mb-3">"Card" is where page posts will be shown </p>

    <div class="form-group">
        <label for="card_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Card background color') }}</label>
        <input type="color" name="card_bg_color" id="card_bg_color" class="form-control shadow-sm w-25" value="{{old('card_bg_color') ? old('card_bg_color') : '#FFFFFF'}}">
    </div>

    <div class="form-group">
        <label for="card_text_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Card text color') }}</label>
        <input type="color" name="card_text_color" id="card_text_color" class="form-control shadow-sm w-25" value="{{old('card_text_color') ? old('card_text_color') : '#111111'}}">
    </div>

    <div class="form-group">
        <label for="card_shadow" class="font-weight-bold"> <i class="fas fa-adjust"></i> {{ __('Card shadow') }}</label>
        <select name="card_shadow" id="card_shadow" class="form-control w-25 shadow-sm">
            <option value="shadow-none">None</option>
            <option value="shadow-sm" selected>Small</option>
            <option value="shadow">Medium</option>
            <option value="shadow-lg">Large</option>
           </select>
    </div>

    <hr>
    <h5> {{ __('Footer') }}</h5>
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
        <input type="color" name="footer_text_color" id="footer_text_color" class="form-control shadow-sm w-25" value="{{old('footer_text_color') ? old('footer_text_color') : '#FFFFFF'}}">
    </div>

    <div class="form-group">
        <label for="footer_bg_color" class="font-weight-bold"> <i class="fas fa-fill-drip"></i> {{ __('Footer background color') }}</label>
        <input type="color" name="footer_bg_color" id="footer_bg_color" class="form-control shadow-sm w-25" value="{{old('footer_bg_color') ? old('footer_bg_color') : '#111111'}}">
    </div>

</div>



@push('scripts')
    <script>
    $('#show_mbar').change(function() {
        if(this.checked) {
            $('#mbar-section').show();
        }else{
            $('#mbar-section').hide();
        }
    });
    $('#show_back_to_top_btn').change(function() {
        if(this.checked) {
            $('#btt-section').show();
        }else{
            $('#btt-section').hide();
        }
    });
    $('#scrollbar_default').change(function() {
        if(this.checked) {
            $('#scrollbar-section').hide();
        }else{
            $('#scrollbar-section').show();
        }
    });
    </script>
@endpush