@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Dettaglio progetto {{$single_movie->title}}</h2>
                    </div>
                    <div>
                        <a href="{{route('admin.movie.index')}}" class="btn btn-sm btn-primary">Torna all'elenco</a>
                    </div>
                </div>
                <img src="{{$single_movie->cover_path}}" class="w-25" alt="">
            </div>
            <div class="col-12">
                <p>
                  <strong>Original Title:</strong>  
                  {{$single_movie->original_title}}
                </p>
                <p>
                    <strong>Nationality:</strong>  
                    {{$single_movie->nationality}}
                </p>
                <p>
                    <strong>Vote</strong>  
                    {{$single_movie->vote}}
                </p>
                <p>
                    <strong>Release date:</strong>  
                    {{$single_movie->release_date}}
                </p>
                <label class="d-block">
                    <strong>Cast:</strong>
                </label>
                <p>{{$single_movie->cast}}</p>
            </div>
        </div>
    </div>

@endsection