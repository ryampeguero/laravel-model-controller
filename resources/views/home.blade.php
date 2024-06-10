@extends('layouts.app')

@section('content')
    <div class="container mt-5 border">
        <div class="row">
            @foreach ($movieList as $movie)
            <div class="col-4 d-flex justify-content-center mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{$movie->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie->title}}</h5>
                      <h6 class="card-title">{{$movie->original_title}}</h6>
                      <p class="card-text">{{$movie->nationality}}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection