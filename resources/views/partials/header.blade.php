<header>
    <div class="header-top"></div>
    <nav class="bg-body-tertiary py-3">
        <div class="container-fluid text-center">
            <div id="navbarNav" class="justify-content-center align-items-center d-flex">
                <div class="logo">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
                <ul class="list-unstyled d-flex">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="{{url('/characters')}}">CHARACTERS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/')}}">COMICS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/movies')}}">MOVIES</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/tv')}}">TV</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/games')}}">GAMES</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/collectibles')}}">COLLECTIBLES</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/videos')}}">VIDEOS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/fans')}}">FANS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/news')}}">NEWS</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{url('/shop')}}">SHOP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>