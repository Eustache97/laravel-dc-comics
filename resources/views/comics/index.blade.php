@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lista dei comics</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipologia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
