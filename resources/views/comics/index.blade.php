@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lista dei comics</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Dettagli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">Vedi</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
