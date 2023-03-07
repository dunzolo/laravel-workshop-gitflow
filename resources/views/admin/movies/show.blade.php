@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="d-flex justify-content-between">
            <div>
                <h2>DETTAGLIO FILM</h2>
            </div>
            <div>
                <a href="{{ route('admin.movies.index') }}" class="btn btn-sm btn-primary">Torna all'elenco</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="image text-end">
                <img class="w-50" src="{{$movie->cover_path}}" alt="{{$movie->title}}">
            </div>
        </div>
        <div class="col-8">
            <div class="info">
                <div><strong>Title: </strong>{{$movie->title}}</div>
                <div><strong>Original Title:</strong>{{$movie->original_title}}</div>
                <div><strong>Nationality: </strong>{{$movie->nationality}}</div>
                <div><strong>Release Date: </strong>{{$movie->release_date}}</div>
                <div><strong>Vote: </strong>{{$movie->vote}}</div>
                <label><strong>Cast: </strong></label>
                <ul>
                    @forelse ($movie->casts as $cast)
                    <li>{{ $cast->name_surname }}</li>
                    @empty
                    <li>Non è presente nessun cast</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection