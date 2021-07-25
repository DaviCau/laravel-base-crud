@extends('layouts.main')

@section('main-content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        {{-- @method('PATCH') --}}
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci titolo" value="{{ old('title', $comic->title) }}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" placeholder="Inserisci prezzo" value="{{ old('price', $comic->price) }}">
        </div>
        <div class="form-group">
            <label for="series">Titolo</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci serie" value="{{ old('series', $comic->series) }}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data Uscita</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci data di uscita" value="{{ old('sale_date', $comic->sale_date) }}">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci tipologia articolo" value="{{ old('type', $comic->type) }}">
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci url dell'immagine" value="{{ old('thumb', $comic->thumb) }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Inserisci descrizione">{{ old('description', $comic->description) }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection