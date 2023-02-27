@extends('layouts.app')
@section('content')

    <div class="p-5 mb-4 text-center">
        <h1 class="display-5 fw-bold">Laravel Movies</h1>
        <p class="fs-4">Ecco i nostri film!</p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Tutti i fumetti</h2>
                    <a href="{{route('movies.create')}}" class="btn btn-primary">Aggiungi un nuovo film</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Immagine</th>
                    <th>Titolo</th>
                    <th>Titolo Originale</th>
                    <th>Nazionalità</th>
                    <th>Data di uscita</th>
                    <th>Voto</th>
                    <th>Cast</th>
                    <th class="text-center">Azioni</th>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{$movie['id']}}</td>
                            <td><img src="{{$movie['cover_path']}}" class="img-fluid"></td>
                            <td>{{$movie['title']}}</td>
                            <td>{{$movie['original_title']}}</td>
                            <td>{{$movie['nationality']}}</td>
                            <td>{{$movie['release_date']}}</td>
                            <td>{{$movie['vote']}}</td>
                            <td>{{$movie['cast']}}</td>
                            <td class="d-flex">
                                <a href="{{route('movies.show', ['movie' => $movie['id']])}}" class="btn btn-info btn-sm btn-square" title="Dettaglio film">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('movies.edit', ['movie' => $movie['id']])}}" class="btn btn-warning btn-sm btn-square" title="Modifica film">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{route('movies.destroy', ['movie' => $movie['id']])}}" class="d-inline-block" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-square btn-danger" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection