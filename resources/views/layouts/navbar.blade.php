<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Jumla') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-search"></i> {{ __('Explore') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-fire-alt"></i> {{ __('Trending') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                    <li class="nav-item @if(Request::url() == route('login')) active @endif">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    
                    <li class="nav-item @if(Request::url() == route('register')) active @endif">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                   
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="navbar-profile-photo rounded-circle"> {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow-sm" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('pages.index') }}">
                                <i class="far fa-newspaper"></i> {{ __('Pages') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user-cog"></i> {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('security') }}">
                                <i class="fas fa-user-shield"></i> {{ __('Security') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                                <button type="submit" class="dropdown-item bg-transparent"><i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</button>
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>