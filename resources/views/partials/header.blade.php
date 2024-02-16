<header>
    <div class="info-blue-box">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="d-flex justify-content-end  list-unstyled m-0 ">
                        <li class="px-2 "><a href="#">DC POWER&#8480; VISA&reg; </a></li>
                        <li class="px-2 "><a href="#">ADDITIONAL DC SITES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <!-- Nav Bar -->
        <nav class="row align-items-center">

            <!-- Logo -->
            <div class="col">
                <a href="{{route('home')}}">
                    <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo">
                </a>
            </div>

            <!-- Menù -->
            <div class="col">
                <ul class="d-flex list-unstyled m-0 ">
                    @foreach ($navLinks['links'] as $link)
                        <li class="px-2 ">
                            <a href="{{route($link['href'])}}" class="{{Route::currentRouteName() === $link['href'] ? 'active' : ''}}">{{$link['name']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</header>