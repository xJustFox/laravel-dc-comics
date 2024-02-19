@extends('layout.app')

@section('content')
    <div class="addComicMain">
        <div class="container-sm my-container">
            <div class="row">
                <div class="col-12 text-white my-px-11">
                    <h1 class="m-0">Add comic</h1>
                </div>
                <div class="col-6 py-3">
                    <form class=" w-100 " action="{{ route('comics.store') }}" method="post">
                        @csrf

                        <div class="my-pt-24">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li> {{ $error }} </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="my-pt-24">
                            <label class="labelComic" for="titleComics">Comics name: </label>
                            <input class="form-control form-control-sm" type="text" name="title" id="titleComics" required value="{{ old('title') }}">
                        </div>

                        <div>
                            <label class="labelComic" for="thumbComics"> Comic cover:</label>
                            <input class="form-control form-control-sm" type="text" name="thumb" id="thumbComics" required value="{{ old('thumb') }}">
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="seriesComics">Series:</label>
                                <input class="form-control form-control-sm" type="text" name="series" id="seriesComics" required value="{{ old('series') }}">
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="typeComic">Type:</label>
                                <input class="form-control form-control-sm" type="texts" name="type" id="typeComic" required value="{{ old('type') }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <label class="labelComic" for="priceComics">Price:</label>
                                <input class="form-control form-control-sm" type="text" name="price" id="priceComics" required value="{{ old('price') }}">
                            </div>
                            <div class="col-6">
                                <label class="labelComic" for="saleDate">Sale Date:</label>
                                <input class="form-control form-control-sm" type="date" name="sale_date" id="saleDate" required value="{{ old('sale_date') }}">
                            </div>
                        </div>

                        <div>
                            <label class="labelComic" for="artistsComics">Artists: </label>
                            <input class="form-control form-control-sm" type="text" name="artists" id="artistsComics" required value="{{ old('artists') }}">
                        </div>

                        <div>
                            <label class="labelComic" for="writersComics">Writers: </label>
                            <input class="form-control form-control-sm" type="text" name="writers" id="writersComics" required value="{{ old('writers') }}">
                        </div>

                        <div>
                            <label class="labelComic" for="descriptionComics">Description:</label>
                            <textarea class="form-control form-control-sm" name="description" id="descriptionComics" cols="30" rows="5" >{{ old('description') }}</textarea>
                        </div>

                        <div class="text-end mt-4 ">
                            <button type="submit" class="my-btn">Add</button>
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
