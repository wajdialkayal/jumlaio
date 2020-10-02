<div class="affix">
    <div class="list-group position-fixed">
                        
        <a href="{{ route('pages.show', $page->id) }}" class="list-group-item list-group-item-action settings-list-group-item bg-transparent h5 border-0 @if(Request::URL() == route('pages.show', $page->id)) active-tab @endif">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>

        <hr class="dropdown-divider">
        
        <a href="{{ route('pages.posts.index', $page->id) }}" class="list-group-item list-group-item-action settings-list-group-item bg-transparent h5 border-0 @if(Request::URL() == route('pages.posts.index', $page->id)) active-tab @endif">
            <i class="fas fa-edit"></i> Posts
        </a>
        
        <hr class="dropdown-divider">

        <a href="#" class="list-group-item list-group-item-action settings-list-group-item bg-transparent h5 border-0">
            <i class="fas fa-images"></i> Banners
        </a>

        <hr class="dropdown-divider">

        <a href="{{ route('pages.users.index', $page->id) }}" class="list-group-item list-group-item-action settings-list-group-item bg-transparent h5 border-0 @if(Request::URL() == route('pages.users.index', $page->id)) active-tab @endif">
            <i class="fas fa-user-cog"></i> User Manager
        </a>

        <hr class="dropdown-divider">

        <a href="#" class="list-group-item list-group-item-action settings-list-group-item bg-transparent h5 border-0">
            <i class="fas fa-cog"></i>  Settings
        </a>
    </div>
</div>