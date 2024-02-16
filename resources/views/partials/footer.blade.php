<footer>
    <!-- Info List -->
    <div class="container ">
        <div class="row">

            <div class="col">
                <div>
                    <div class="row flex-column content">
                        @foreach ($footerArr['arrInfo'] as $item)
                            <div class="col-4">
                                <span class="title">{{$item['title']}}</span>

                                @foreach ($item['links'] as $link)
                                    <div>
                                        <a class="infoItems" href="#">{{$link}}</a>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col content overflow-hidden">
                <img class="log-bg" src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
            </div>
        </div>
    </div>

    <!-- Button and Socials -->
    <div class="my-bg-black">
        <div class="container">
            <div class="row justify-content-between py-4">
                <div class="col">
                    <button class="btn my-btn text-white">SING-UP NOW!</button>
                </div>
                <div class="col d-flex justify-content-end ">
                    <ul class="list-unstyled m-0 d-flex align-items-center">
                        <li>FOLLOW US</li>
                        @foreach ($footerArr['arrSocial'] as $item)
                            <li class="socialIcon">
                                <a href="{{Vite::asset($item['href'])}}">
                                    <img src="{{Vite::asset($item['img'])}}" alt="{{Vite::asset($item['alt'])}}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>