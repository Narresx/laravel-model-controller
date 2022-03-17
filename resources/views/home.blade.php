@extends('layout.main')

@section('content')
    <h1 class="text-center">Movies</h1>
    <section class="container d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Nationality: {{ $movie->nationality }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Date: {{ $movie->date }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Vote: {{ $movie->vote }}</h6>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt harum
                        maiores delectus provident nihil similique alias inventore earum vel enim nobis aliquam eum
                        reprehenderit sunt vitae soluta illum, voluptates quis.</p>
                </div>
            </div>
        @endforeach
    </section>
@endsection
