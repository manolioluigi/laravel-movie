@extends('layouts.admin')
@section('content')
<div class="container">
<div class="row">
    <div class="col-12 d-flex justify-content-between">
        <div>
            <h1>iserisci nuovo film</h1>
           
        </div>
        <div class="my-2">
        <a href="{{ route('admin.movie.index')}}" class="btn btn-primary"> torna all'elenco</a>
        
            
        </div>
    </div>
</div>
</div>

<div class="container p-2">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('admin.movie.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label class="control-label">Titolo</label>
        <input type="text" name="title" class="form-control"
        placeholder="inserisci titolo">
    </div>

    <div class="form-group">
        <label class="control-label">Titolo originale</label>
        <input type="text" name="original_title" class="form-control"
        placeholder="inserisci titolo">
    </div>
    <div class="form-group">
        <label class="control-label">nationality</label>
        <input type="text" name="nationality" class="form-control"
        placeholder="inserisci serie">
    </div>
    <div class="form-group">
        <label class="control-label">voto</label>
        <input type="text" name="vote" class="form-control"
        placeholder="inserisci prezzo">
    </div>
    <div class="form-group">
        <label class="control-label">immagine</label>
        <input type="text" name="cover_path" class="form-control"
        placeholder="inserisci immagine">
    </div>

    <div  class="form-group">
        <label class="control-label">data</label>
        <input type="date" name="release_date" class="form-control"
        placeholder="inserisci data">
    </div>
    

    <div class="form-group mb-3">
        <label class="control-label">cast</label>
        <textarea type="text" name="cast" class="form-control"
        placeholder="inserisci descrizione" rows="10"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary w-50">salva</button>
    </div>
</form>
</div>

@endsection