@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="image">
                <img class="w-25" src="{{$movie->cover_path}}" alt="{{$movie->title}}">
            </div>
            <div class="info">
                <label><strong>Title</strong> </label>
                <div>{{$movie->title}}</div>
                <label><strong>Original Title</strong> </label>
                <div>{{$movie->original_title}}</div>
                <label><strong>Nationality</strong> </label>
                <div>{{$movie->nationality}}</div>
                <label><strong>Release Date</strong></label>
                <div>{{$movie->release_date}}</div>
                <label><strong>Vote</strong></label>
                <div>{{$movie->vote}}</div>
                <label><strong>Cast</strong></label>
                <div>{{$movie->cast}}</div>
            </div>
        </div>
    </div>
</div>
@endsection