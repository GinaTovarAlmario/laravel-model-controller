@extends('layouts.app')

@section('page-title', 'Movies Index')

@section('main-content')
    <section class="container" id="movies-list">
        <div class="row">
            @forelse ($movies as $movie)
            <div class="col-3">
                <div class="card box-movies mb-4">
                    <div class="card-body">
                        <h5 class="card-title">
                            Title: {{$movie->title}}
                        </h5>
                        <h5 class="card-title">
                            Orginal Title: {{$movie->original_title}}
                        </h5>
                        <p class="card-text">
                            Nationality: {{$movie->nationality}}
                        </p>
                        <p class="card-text">
                            Date: {{$movie->date}}
                        </p><p class="card-text">
                            Vote: {{$movie->vote}}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h2>
                    No movies available..
                </h2>
            </div>
            @endforelse
        </div>
    </section>
@endsection
