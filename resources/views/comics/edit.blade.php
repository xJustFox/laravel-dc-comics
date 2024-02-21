@extends('layout.app')

@section('content')
    <div class="addComicMain">
        <div class="container-sm my-container">
            <div class="row">
                <div class="col-12 text-white my-px-11">
                    <h1 class="m-0">Modify comic</h1>
                </div>
                <div class="col-6 py-3">
                    <form class=" w-100 " action="{{route('comics.update', $comic->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="my-pt-24">
                            <label class="labelComic" for="titleComics">Comics name: </label>
                            <input class="form-control form-control-sm @error('title') is-invalid border-danger @enderror" type="text" name="title" id="titleComics" required value="{{$comic['title']}}">
                            @error('title')
                                <span class="text-danger my-fs-small">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div>
                            <label class="labelComic" for="thumbComics"> Comic cover:</label>
                            <input class="form-control form-control-sm @error('thumb') is-invalid border-danger @enderror" type="text" name="thumb" id="thumbComics" required value="{{$comic['thumb']}}">
                            @error('thumb')
                                <span class="text-danger my-fs-small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="seriesComics">Series:</label>
                                <input class="form-control form-control-sm @error('series') is-invalid border-danger @enderror" type="text" name="series" id="seriesComics" required value="{{$comic['series']}}">
                                @error('series')
                                    <span class="text-danger my-fs-small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="typeComic">Type:</label>
                                <input class="form-control form-control-sm @error('type') is-invalid border-danger @enderror" type="texts" name="type" id="typeComic" required value="{{$comic['type']}}">
                                @error('type')
                                    <span class="text-danger my-fs-small">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="priceComics">Price:</label>
                                <input class="form-control form-control-sm @error('price') is-invalid border-danger @enderror" type="text" name="price" id="priceComics" required value="{{$comic['price']}}">
                                @error('price')
                                    <span class="text-danger my-fs-small">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="saleDate">Sale Date:</label>
                                <input class="form-control form-control-sm @error('sale_date') is-invalid border-danger @enderror" type="date" name="sale_date" id="saleDate" required value="{{$comic['sale_date']}}">
                                @error('sale_date')
                                    <span class="text-danger my-fs-small">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="labelComic" for="artistsComics">Artists: </label>
                            <input class="form-control form-control-sm @error('artists') is-invalid border-danger @enderror" type="text" name="artists" id="artistsComics" required value="{{implode(',' ,json_decode($comic['artists']))}}">
                            @error('artists')
                                <span class="text-danger my-fs-small">{{$message}}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="labelComic" for="writersComics">Writers: </label>
                            <input class="form-control form-control-sm @error('writers') is-invalid border-danger @enderror" type="text" name="writers" id="writersComics" required value="{{implode(json_decode($comic['writers']))}}">
                            @error('writers')
                                <span class="text-danger my-fs-small">{{$message}}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="labelComic" for="descriptionComics">Description:</label>
                            <textarea class="form-control form-control-sm @error('description') is-invalid border-danger @enderror" name="description" id="descriptionComics" cols="30" rows="5">{{$comic['description']}}</textarea>
                            @error('description')
                                <span class="text-danger my-fs-small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mt-4 text-end">
                            <a class="my-btn mx-3 text-decoration-none" href="{{ route('comics.show', $comic['id']) }}">Back</a>
                            <button type="submit" class="my-btn">Modify</button>
                        </div>
                    </form>
                </div>
                <div class="col-4 py-3">
                    <div class="text-end fw-bold text-secondary">ADVERTISMENT</div>
                    <img class="w-100" src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
