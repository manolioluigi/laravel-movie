@extends('layouts.admin')
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
                    <a href="{{route('admin.movie.create')}}" class="btn btn-primary">Aggiungi un nuovo film</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <th><strong>ID</strong></th>
                    <th><strong>Immagine</strong></th>
                    <th><strong>Titolo</strong></th>
                    <th><strong>Titolo Originale</strong></th>
                    <th><strong>Nazionalità</strong></th>
                    <th><strong>Data di uscita</strong></th>
                    <th><strong>Voto</strong></th>
                    <th><strong>Cast</strong></th>
                    <th class="text-center">Azioni</th>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{$movie['id']}}</td>
                            <td><img src="{{$movie['cover_path']}}" class="img-fluid locandina"></td>
                            <td>{{$movie['title']}}</td>
                            <td>{{$movie['original_title']}}</td>
                            <td>{{$movie['nationality']}}</td>
                            <td>{{$movie['release_date']}}</td>
                            <td>{{$movie['vote']}}</td>
                            <td>{{$movie['cast']}}</td>
                            <td class="d-flex">
                                <a href="{{route('admin.movie.show', ['movie' => $movie['id']])}}" class="btn btn-info btn-sm btn-square my-1" title="Dettaglio film">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('admin.movie.edit', ['movie' => $movie['id']])}}" class="btn btn-warning btn-sm btn-square mx-2 my-1" title="Modifica film">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.movie.destroy', ['movie' => $movie['id']])}}" class="d-inline-block my-1" method="POST">
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