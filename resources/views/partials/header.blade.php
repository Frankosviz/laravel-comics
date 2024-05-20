<header>
    <div class="containerFD d-flex justify-content-between bg-white">
        <div class="d-flex align-items-center justify-content-center me-5">
            <a href="{{ route('homepage') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo"></a>
        </div>
        <div>
            <ul class="d-flex align-items-center justify-content-center gap-5 list-unstyled  ">
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'comics' ? 'active' : ''}}" href="{{route('comics')}}">
                    Comics
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'characters' ? 'active' : ''}}"
                        href="{{route('characters')}}">
                    Characters
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'movies' ? 'active' : ''}}" href="{{route('movies')}}">
                    Movies
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'tv' ? 'active' : ''}}" href="{{route('tv')}}">
                    TV
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'games' ? 'active' : ''}}" href="{{route('games')}}">
                    Games
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'collectibles' ? 'active' : ''}}"
                        href="{{route('collectibles')}}">
                    Collectibles
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'videos' ? 'active' : ''}}" href="{{route('videos')}}">
                    Videos
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'fans' ? 'active' : ''}}" href="{{route('fans')}}">
                    Fans
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'news' ? 'active' : ''}}" href="{{route('news')}}">
                    News
                </li>
                <li class="active">
                    <a class="nav-link {{ Route::currentRouteName() == 'shop' ? 'active' : ''}}" href="{{route('shop')}}">
                </li>
            </ul>
        </div>
    </div>
</header>