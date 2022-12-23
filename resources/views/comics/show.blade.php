@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">
        <p>{{ $comic->description }}</p>
        <dl>
            <dt>Price</dt>
            <dd>{{ $comic->price }}</dd>
            <dt>Series</dt>
            <dd>{{ $comic->series }}</dd>
            <dt>Type</dt>
            <dd>{{ $comic->type }}</dd>
            <dt>Date</dt>
            <dd>{{ $comic->sale_date }}</dd>
        </dl>
    </div>
@endsection
