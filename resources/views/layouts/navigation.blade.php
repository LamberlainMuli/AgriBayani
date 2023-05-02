<nav x-data="{ open: false }" class="navbar bg-white navbar-expand-lg fixed-top">
    <a class="navbar-brand h4" href="/"><img src="/assets/img/logo-dark.svg" height=20
        style="margin-right: 5pt;">AgriBayani</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
      aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            @if (Auth::check())
                @if (Auth::user()->is_borrower)
                    <!-- Profile -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts') }}" active="{{ request()->routeIs('posts') }}">
                            {{ __('Posts') }}
                        </a>
                    </li>
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('investors') }}" active="{{ request()->routeIs('investors') }}">
                            {{ __('Investors') }}
                        </a>
                    </li>
                @else
                        <!-- News Feed -->
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('newsfeed') }}" active="{{ request()->routeIs('newsfeed') }}">
                            {{ __('News Feed') }}
                        </a>
                    </li>
                    <!-- Navigation Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('explore') }}" active="{{ request()->routeIs('explore') }}">
                            {{ __('Explore') }}
                        </a>
                    </li>
                @endif
            @endif
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown dropdown-menu-right mb-0">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end mr-10">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item"><strong>
                        {{ __('Profile') }}
                    </strong></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" class="dropdown-item"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
