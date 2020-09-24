
@if($page->show_mbar)
    <div class="text-center justify-content-center align-items-center mbar">
        <img src="{{ asset($page->logo_url) }}" class="mt-5 rounded-circle mbar-logo shadow-sm border object-fit-cover"
            alt="{{ $page->name }}">
        <p class="mt-2">{{ $page->short_description }}</p>
    </div>
@endif