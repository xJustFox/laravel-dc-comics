@extends('layout.app')

@section('content')

    <div class="comicsMain">
        <div class="container my-p position-relative">
            <div class="plate">CURRENT SERIES</div>

            <div class="my-row">

                <div class="my-col-12 d-flex justify-content-end ">
                    <a class="text-decoration-none" href="{{ route('comics.create')}}">
                        <div class="my-btn">Add Comic</div>
                    </a>
                </div>

                @foreach ($comics as $comic)
                    <div class="my-col">
                        <a class=" text-decoration-none" href="{{ route('comics.show', $comic['id']) }}">
                            <div class="imgContainer">
                                @if ($comic['thumb'] != 'no-img')
                                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                    
                                @else
                                    <img class="card-comic" src="{{Vite::asset('resources/img/error-img.jpg')}}" alt="{{ $comic['series'] }}">
                                @endif
                            </div>
                            <div class="price">{{ $comic['price'] }}</div>
                            <div class="textComics">
                                {{ $comic['title'] }}
                            </div>
                        </a>          
                    </div>
                @endforeach
            </div>

            <div class="text-center pt-4">
                <button class="my-btn">LOAD MORE</button>
            </div>
        </div>
        <section class="shippingBanner">
            <div class="container">
                <ul class="list-unstyled m-0  d-flex justify-content-around  p-5 flex-wrap">
                    @foreach ($blueBar['itemBar'] as $item)
                        <li>
                            <img src="{{ Vite::asset($item['icon']) }}" alt="">
                            <span class="title">{{ $item['title'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
@endsection
