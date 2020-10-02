<div class="border-right shadow" id="sidebar-wrapper">
    {{-- <div class="sidebar-heading"> </div> --}}
    <div class="list-group list-group-flush">
      <a href="{{ url('/') }}" class="list-group-item list-group-item-action sidebar-item @if(Request::url() == url('/')) active-sidebar-item @endif"><i class="fas fa-home"></i> Home</a>
      <a href="{{route('explore') }}" class="list-group-item list-group-item-action sidebar-item @if(Request::url() == route('explore')) active-sidebar-item @endif"><i class="fas fa-search"></i> Explore</a>
      <a href="{{route('trending') }}" class="list-group-item list-group-item-action sidebar-item @if(Request::url() == route('trending')) active-sidebar-item @endif"><i class="fas fa-fire-alt"></i> Trending</a>
      <a href="{{route('pages.index') }}" class="list-group-item list-group-item-action sidebar-item @if(Request::url() == route('pages.index')) active-sidebar-item @endif"><i class="far fa-newspaper"></i> My Pages</a>
      <a href="#" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-rss"></i> Following</a>
      <a href="#" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-star"></i> Favorites</a>
      <a href="#" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-heart"></i> Liked Posts</a>
      
    </div>
  </div>