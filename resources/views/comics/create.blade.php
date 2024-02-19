@extends('layout.app')

@section('content')
    <div class="addComicMain">
        <div class="container-sm my-container">
            <div class="row">
                <div class="col-12 text-white my-px-11">
                    <h1 class="m-0">Add comic</h1>
                </div>
                <div class="col-6">
                    <form class=" w-100 " action="{{route('comics.store')}}" method="post">
                        @csrf
                        
                        <div class="my-pt-24">
                            <label class="labelComic" for="titleComics">Comics name: </label>
                            <input class="form-control form-control-sm" type="text" name="title" id="titleComics">
                        </div>
                        
                        <div>
                            <label class="labelComic" for="thumbComics"> Comic cover:</label>
                            <input class="form-control form-control-sm" type="text" name="thumb" id="thumbComics">
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="seriesComics">Series:</label>
                                <input class="form-control form-control-sm" type="text" name="series" id="seriesComics">
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="typeComic">Type:</label>
                                <input class="form-control form-control-sm" type="texts" name="type" id="typeComic">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="priceComics">Price:</label>
                                <input class="form-control form-control-sm" type="text" name="price" id="priceComics">
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="saleDate">Sale Date:</label>
                                <input class="form-control form-control-sm" type="date" name="sale_date" id="saleDate">
                            </div>
                        </div>

                        <div>
                            <label class="labelComic" for="artistsComics">Artists: </label>
                            <input class="form-control form-control-sm" type="text" name="artists" id="artistsComics">
                        </div>

                        <div>
                            <label class="labelComic" for="writersComics">Writers: </label>
                            <input class="form-control form-control-sm" type="text" name="writers" id="writersComics">
                        </div>

                        <div>
                            <label class="labelComic" for="descriptionComics">Description:</label>
                            <textarea class="form-control form-control-sm" name="description" id="descriptionComics" cols="30" rows="5"></textarea>
                        </div>

                        <div class="text-end mt-4 ">
                            <button class="my-btn">Add</button>
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
