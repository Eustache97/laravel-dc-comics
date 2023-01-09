@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Modifica {{ $comic->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-7 mb-4">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series">Serie</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="type">Tipologia</label>
                        <select class="form-control" name="type" id="type">
                            <option value="">Seleziona un valore</option>
                            <option value="comic book" @selected($comic->type === 'comic book')>Comic Book</option>
                            <option value="graphic novel" @selected($comic->type === 'graphic novel')>Graphic Novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="sale_date">Data di uscita</label>
                        <input class="form-control" type="text" id="sale_date" name="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="10">{{ $comic->description }}</textarea>
                    </div>

                    <button class="btn btn-warning" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
