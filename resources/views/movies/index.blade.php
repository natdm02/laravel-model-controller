@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">Description: {{ $movie->description }}</p>
                    <p class="card-text">Release Year: {{ $movie->release_year }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
