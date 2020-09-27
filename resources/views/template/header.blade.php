<header>
    <div class="inner-container">
        <div class="header-img">
            <a href=" {{ URL::to('/') }} ">
                <img src="{{ asset('images/template/logo.png') }}" alt="Lovelace Logo">
            </a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href=" {{ URL::to('/menu') }} ">Menu</a></li>
                <li><a href=" {{ URL::to('/about') }} ">About</a></li>
                <li><a href=" {{ URL::to('/contact') }} ">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>