<header>
    <div class="container-visa">
        <div class="container">
            <div class="power-visa">
                DC POWER VISA
            </div>
            <div class="additional-sites">
                ADDITIONAL DC SITES
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="container-logo">
                <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo">
            </div>

            <ul class="link-navbar">
                @foreach ($navbarLinks as $link)
                    <li>
                        @if($link == 'comics')
                        <a class="active" href="#">{{$link}}</a>
                        @else
                        <a href="#">{{$link}}</a>
                        @endif
                    </li>
                @endforeach
            </ul>

            <div class="container-input">
                <input type="text" placeholder="search ">
            </div>
        </div>
    </nav>
</header>