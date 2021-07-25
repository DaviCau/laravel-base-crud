@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div class="container">
        <div class="comics-container">
            <h2>CURRENT SERIES</h2>
            @foreach ($comics as $item)
                <div class="card">
                    <a href="{{ route("comics.show", $item->id) }}" class="card">
                        <img src="{{ $item["thumb"] }}" :alt="{{$item["series"]}}">
                        <h3>{{ $item["series"] }}</h3>
                    </a>
                    <a href="{{ route("comics.edit", $item->id) }}">edit</a>
                    <form action="{{ route('comics.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE">
                    </form>
                </div>
            @endforeach
        </div>
        <div class="load-more">
            <button>LOAD MORE</button>
        </div>
    </div>
</div>
@endsection