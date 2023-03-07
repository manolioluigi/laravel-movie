@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row">
        @forelse ($genre->movies as $movie)
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card ">
                <img src="https://picsum.photos/seed/picsum/150/100" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}-{{ $movie->id}}</h5>
                    <p class="card-text">{{ $movie->original_title}}</p>
                    <p class="card-text">{{ $movie->nationality}}</p>
                </div>
            </div>  
        </div>
        @empty
        <div class="col-12">
            <h1>Non è presente nessun film</h1>
        </div>
        @endforelse
    </div>
</div>
@endsection