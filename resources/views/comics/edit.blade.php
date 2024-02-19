@extends('layout.app')

@section('content')
    <div class="addComicMain">
        <div class="container-sm my-container">
            <div class="row">
                <div class="col-12 text-white my-px-11">
                    <h1 class="m-0">Modify comic</h1>
                </div>
                <div class="col-6">
                    <form class=" w-100 " action="{{route('comics.update', $comic->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="my-pt-24">
                            <label class="labelComic" for="titleComics">Comics name: </label>
                            <input class="form-control form-control-sm" type="text" name="title" id="titleComics" value="{{$comic['title']}}">
                        </div>
                        
                        <div>
                            <label class="labelComic" for="thumbComics"> Comic cover:</label>
                            <input class="form-control form-control-sm" type="text" name="thumb" id="thumbComics" value="{{$comic['thumb']}}">
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="seriesComics">Series:</label>
                                <input class="form-control form-control-sm" type="text" name="series" id="seriesComics" value="{{$comic['series']}}">
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="typeComic">Type:</label>
                                <input class="form-control form-control-sm" type="texts" name="type" id="typeComic" value="{{$comic['type']}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="priceComics">Price:</label>
                                <input class="form-control form-control-sm" type="text" name="price" id="priceComics" value="{{$comic['price']}}">
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="saleDate">Sale Date:</label>
                                <input class="form-control form-control-sm" type="date" name="sale_date" id="saleDate" value="{{$comic['sale_date']}}">
                            </div>
                        </div>

                        <div>
                            <label class="labelComic" for="artistsComics">Artists: </label>
                            <input class="form-control form-control-sm" type="text" name="artists" id="artistsComics" value="{{implode(',' ,json_decode($comic['artists']))}}">
                        </div>

                        <div>
                            <label class="labelComic" for="writersComics">Writers: </label>
                            <input class="form-control form-control-sm" type="text" name="writers" id="writersComics" value="{{implode(json_decode($comic['writers']))}}">
                        </div>

                        <div>
                            <label class="labelComic" for="descriptionComics">Description:</label>
                            <textarea class="form-control form-control-sm" name="description" id="descriptionComics" cols="30" rows="5">{{$comic['description']}}</textarea>
                        </div>

                        <div class="text-end mt-4 ">
                            <button type="submit" class="my-btn">Modify</button>
                        </div>
                    </form>
                </div>
                <div class="col-4">
                    <div class="text-end fw-bold text-secondary">ADVERTISMENT</div>
                    <img class="w-100" src="{{ Vite::asset('/resources/img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
