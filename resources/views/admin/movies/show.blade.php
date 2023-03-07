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
                <img src="{{$single_movie->cover_path}}" class="cover-img img img-fluid" alt="">
            </div>
            <div class="col-12">

                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"><strong>Original Title:</strong>  </th>
                        <th scope="col"><strong>Nationality:</strong></th>
                        <th scope="col"><strong>Vote</strong></th>
                        <th scope="col"><strong>Release date:</strong> </th>
                        <th scope="col"><strong>Genere:</strong></th>
                        <th scope="col"><strong>Cast:</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">{{$single_movie->original_title}}</th>
                        <td>{{$single_movie->nationality}}</td>
                        <td>{{$single_movie->vote}}</td>
                        <td>{{$single_movie->release_date}}</td>
                        <td><p>{{$single_movie->genre ? $single_movie->genre->genre : 'nessun genere selezionato'}}</p></td>
                        <td><p>{{$single_movie->cast}}</p></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection