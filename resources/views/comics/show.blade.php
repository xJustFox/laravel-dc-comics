@extends('layout.app')

@section('content')
    <div class="detailesMain">
        <div class="container-sm my-container px-5">
            @if ($comic['thumb'] != 'no-img')
                <img class="card-comic" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            @else
                <img class="card-comic" src="{{ Vite::asset('resources/img/error-img.jpg') }}" alt="{{ $comic['series'] }}">
            @endif

            <div class="d-flex">
                {{-- MODIFY BUTTON --}}
                <a class="text-decoration-none" href="{{ route('comics.edit', $comic->id) }}">
                    <button class="my-btn">Modify Comic</button>
                </a>

                {{-- DELETE FORM --}}
                <form class="mx-3 delete-comic" action="{{ route('comics.destroy', $comic->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="my-btn bg-danger" type="submit" data-comic-title="{{ $comic->title }}">Delete Comic</button>
                </form>
            </div>

            <div class="row">
                <div class="col-9 my-pt-24">

                    <h1 class="text-blue">{{ strtoupper($comic['title']) }}</h1>

                    <div class="row fs-5 ">
                        <div class="col-12 py-4">
                            <div class="row fw-medium">
                                <div class="col-9 my-pr-0">
                                    <div class="d-flex justify-content-between box-left">
                                        <span class="px-4 text-light-green">U.S. Price: <span
                                                class="text-white">{{ $comic['price'] }}</span></span>
                                        <span class="px-4 text-light-green">AVAIBLE</span>
                                    </div>
                                </div>

                                <div class="col-3 my-pl-0">
                                    <div class="text-center text-white box-right">
                                        Check Availability
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12">
                            <p>{{ $comic['description'] }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="text-end fw-bold text-secondary">ADVERTISMENT</div>
                    <img class="w-100" src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>

        <hr>

        {{-- TABLE --}}
        <div class="container-sm px-3 py-3">
            <div class="row">

                {{-- LEFT TABLE --}}
                <div class="col-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-blue" colspan="2">
                                    <h4 class="fw-bold">Talent</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bolder" style="width: 30%;">Art by:</td>
                                <td>
                                    @foreach ($artists as $key => $artist)
                                        {{ $artist }}
                                        @if (end($artists) == $artist)
                                            .
                                        @else
                                            ,
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder" style="width: 30%;">Written by:</td>
                                <td>
                                    @foreach ($writers as $key => $writer)
                                        {{ $writer }}
                                        @if (end($writers) == $writer)
                                            .
                                        @else
                                            ,
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- RIGHT TABLE --}}
                <div class="col-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-blue" colspan="2">
                                    <h4 class="fw-bold">Specs</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bolder" style="width: 30%;">Series:</td>
                                <td> <a href="#" class="text-decoration-none"> {{ strtoupper($comic['series']) }}
                                    </a> </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder" style="width: 30%;">U.S. Price:</td>
                                <td> {{ $comic['price'] }} </td>
                            </tr>
                            <tr>
                                <td class="fw-bolder" style="width: 30%;">On Sale Date:</td>
                                <td> {{ $comic['sale_date'] }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
    @include('partials.modal_delete')
@endsection
