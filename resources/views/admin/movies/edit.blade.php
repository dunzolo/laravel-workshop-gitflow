@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="container">
        <div class="row mt-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>MODIFICA FILM</h2>
                </div>
                <div>
                    <a href="{{ route('admin.movies.index') }}" class="btn btn-sm btn-primary">Torna all'elenco</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled mb-0">
                            @foreach ($errors->all() as $error)
                            <li><i class="fa-solid fa-triangle-exclamation"></i>{{ $error }}</li>    
                            @endforeach                
                        </ul>
                    </div>
                @endif
                <form class="" action="{{ route('admin.movies.update', $movie->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                        <label class="control-label" for="title">
                            Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Write the Title of the movie" value="{{ old('title') ?? $movie->title}}">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="title">
                            Originale Title
                        </label>
                        <input type="text" class="form-control" id="original_title" name="original_title" placeholder="Write the Original Title of the movie" value="{{ old('original_title') ?? $movie->original_title}}">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="title">
                            Vote
                        </label>
                        <input type="text" class="form-control" id="vote" name="vote" placeholder="Write the Vote of the movie" value="{{ old('vote') ?? $movie->vote}}">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="nationality">
                            Nationality
                        </label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Insert movie nationality" value="{{ old('nationality') ?? $movie->nationality}}">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="release_date">
                            Release Date
                        </label>
                        <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Please sett upp the Release date of the movie" value="{{ old('release_date') ?? $movie->release_date}}">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="cast">
                            Cast
                        </label>
                        <div class="row">
                            @foreach ($casts as $cast)
                            <div class="col-md-3" @error('casts') is-invalid @enderror>
                                <input type="checkbox" value="{{ $cast->id }}" name="casts[]" {{ $movie->casts->contains($cast) ? 'checked' : ''}}>
                                <label for="" class="form-check-label">{{ $cast->name_surname }}</label>
                                @error('casts')
                                <div class="invalid-feddback">{{ $message }}</div>
                                @enderror
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="cover_path">
                            Cover
                        </label>
                        <input type="text" class="form-control" id="cover_path" name="cover_path" placeholder="Please copy the Cover link" value="{{ old('cover_path') ?? $movie->cover_path}}">
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-lg btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection