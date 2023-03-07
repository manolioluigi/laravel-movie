@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-3">
                <a class="btn btn-primary" href="">Add Genre</a>
            </div>
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message')}}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Azione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($genres as $genre)
                        <tr>
                            <th scope="row">{{ $genre->id }}</th>
                            <td>{{ $genre->genre }}</td>
                            <td>
                                <a class="btn-sm btn btn-primary" href="{{route('admin.genres.show', $genre->genre)}}"><i class="fas fa-eye"></i></a>
                                <a class="btn-sm btn btn-warning" href=""><i class="fas fa-edit"></i></a>
                                <form class="d-inline" action="" method="POST">
                                    @csrf
                                    
                                    @method('DELETE')
                                    <button type="submit" class="btn-sm btn btn-danger confirm-delete-button" data-title="{{ $genre->genre }}"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>   
                        @empty
                        <tr>
                            <td>Aggiungi qualcosa <a href="">QUI</a></td>    
                        </tr>              
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection