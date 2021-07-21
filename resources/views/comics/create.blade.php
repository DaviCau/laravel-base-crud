@extends('layouts.main')

@section('main-content')
<div class="container">
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci titolo">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" name="price" id="price" placeholder="Inserisci prezzo">
        </div>
        <div class="form-group">
            <label for="series">Titolo</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci serie">
        </div>
        <div class="form-group">
            <label for="sale_date">Data Uscita</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci data di uscita">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci tipologia articolo">
        </div>
        <div class="form-group">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci url dell'immagine">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Inserisci descrizione"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection