@extends('layouts.main')

@section('main-content')
<div class="separator">
    <div class="active-comic-img">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
    </div>
</div>
<div class="container">
    <div class="comic-desc">
        <h2>{{$comic['title']}}</h2>
        <p>{{$comic['description']}}</p>
    </div>
</div>
@endsection