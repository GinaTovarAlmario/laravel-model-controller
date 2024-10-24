@extends('layouts.app')

@section('page-title', 'Movies Index')

@section('main-content')
    <section class=" bg-secondary" id="movies-list">
        <div class="container ">
            <div class="row ">
                @forelse ($movies as $movie)
                    <div class="col-3 mt-3 mb-3">
                        <div class="card box-movies mb-4 bg-dark-subtle">
                            <div class="card-body">
                                <div class="card-text">
                                    <span class="fw-bold fs-4 text-danger">Title: </span>
                                    <h4> {{ $movie->title }}</h4>
                                </div>
                                <div class="card-text fs-5 ">
                                    <span class="fw-bold text-danger">Original Title: </span>
                                    <h5>{{ $movie->original_title }}</h5>
                                </div>
                                <p class="card-text fs-5 fw-semi-bold ">
                                   <span class="fw-bold text-danger">Nationality: </span>{{ $movie->nationality }}
                                </p>
                                <p class="card-text fs-5 fw-semi-bold  ">
                                    <span class="fw-bold text-danger"> Date: </span>{{ $movie->date }}
                                </p>
                                <p class="card-text fs-5 fw-semi-bold">
                                    <span class="fw-bold text-danger">Vote: </span>{{ $movie->vote }}
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
        </div>
    </section>
@endsection
