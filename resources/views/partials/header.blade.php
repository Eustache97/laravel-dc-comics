<header>
    <div class="container">
        <div class="header-div">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc_comics">
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a class="{{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}"
                            href="{{ route('comics.index') }}">Comics</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
