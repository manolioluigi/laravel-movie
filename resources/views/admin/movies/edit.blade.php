@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <div>
                <h1>Modifica Film</h1>
            </div>

            <div class="my-2">
                <a href="{{ route('admin.movie.index')}}" class="btn btn-primary"> torna all'elenco</a>
            </div>
            
        </div>
    </div>
</div>

<div class="container p-2">


    <form action="{{ route('admin.movie.update', $movie->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="control-label">Titolo</label>
            <input type="text" name="title" class="form-control"
            placeholder="inserisci titolo" value="{{ old('title') ?? $movie->title }}">
          
        </div>

        <div class="form-group">
        <label class="control-label">Titolo originale</label>
        <input type="text" name="original_title" class="form-control"
        placeholder="inserisci titolo" value="{{ old('original_title') ?? $movie->original_title }}">
        </div>
        <div class="form-group">
        <label class="control-label">nationality</label>
        <input type="text" name="nationality" class="form-control"
        placeholder="inserisci paese" value="{{ old('nationality') ?? $movie->nationality }}">
        </div>
        <div class="form-group">
        <label class="control-label">voto</label>
        <input type="text" name="vote" class="form-control"
        placeholder="inserisci voto" value="{{ old('vote') ?? $movie->vote }}">
        </div>
        <div class="form-group">
            <label class="control-label">immagine</label>
            <input type="text" name="cover_path" class="form-control"
            placeholder="inserisci immagine" value="{{ old('cover_path') ?? $movie->cover_path}}">
        </div>

        <div class="form-group">
            <label class="control-label">data</label>
            <input type="date" name="release_date" class="form-control"
            placeholder="inserisci data" value="{{ old('release_date') ?? $movie->release_date}}">
        </div>

        <div class="form-group my-3">
            <label class="control-label">
                    Genere
            </label>
            <select name="genre_id" id="genre_id">
                @foreach($genres as $genre)
                <option value="{{$genre->id}}" {{ $genre->id == old('genre_id', $movie->genre_id) ? 'selected' : ''}}>{{$genre->genre}}</option>
                @endforeach
            </select>
                
        </div>
        
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary w-50">salva</button>
        </div>
    </form>
</div>

@endsection