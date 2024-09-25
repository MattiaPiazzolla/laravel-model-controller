@extends('layouts.app')
@section('content')
    <div class="container py-5 ">
        <h1 class="m-5 text-center">{{ $title }}</h1>
        <div class="row g-5">
            @foreach ($movies as $movie)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            {{ $movie->title }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $movie->original_title }}</li>
                            <li class="list-group-item">{{ $movie->nationality }}</li>
                            <li class="list-group-item">{{ $movie->date }}</li>
                            <li class="list-group-item">{{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
