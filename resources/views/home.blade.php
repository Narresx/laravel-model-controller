@extends('layout.main')

@section('content')
    <section class="container text-center">
        <h1>Movies</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie->$title }}</li>
            @endforeach
        </ul>


    </section>
@endsection
