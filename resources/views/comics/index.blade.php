@extends('layouts.main')

@section('main-content')
<div class="main-content">
    <div class="container">
        <div class="comics-container">
            <h2>CURRENT SERIES</h2>
            @foreach ($comics as $item)
                <a href="{{ route("comics.show", $item->id) }}" class="card">
                    <img src="{{ $item["thumb"] }}" :alt="{{$item["series"]}}">
                    <h3>{{ $item["series"] }}</h3>
                </a>
            @endforeach
        </div>
        <div class="load-more">
            <button>LOAD MORE</button>
        </div>
    </div>
</div>
@endsection