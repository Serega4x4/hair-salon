{{-- navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('main.index') }}"><span
                class="flaticon-scissors-in-a-hair-salon-badge"></span>Studio
            Fryzur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Route::currentRouteName() == 'main.index' ? 'active' : '' }}">
                    <a href="{{ route('main.index') }}" class="nav-link">Główna</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'main.services' ? 'active' : '' }}">
                    <a href="{{ route('main.services') }}" class="nav-link">Usługi</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'main.gallery' ? 'active' : '' }}">
                    <a href="{{ route('main.gallery') }}" class="nav-link">Galeria</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'main.about' ? 'active' : '' }}">
                    <a href="{{ route('main.about') }}" class="nav-link">O nas</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'main.blog' ? 'active' : '' }}">
                    <a href="{{ route('main.blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item {{ Route::currentRouteName() == 'main.contact' ? 'active' : '' }}">
                    <a href="{{ route('main.contact') }}" class="nav-link">Kontakty</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
