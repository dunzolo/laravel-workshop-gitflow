@extends('layouts.app')
@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Add a New Moovie</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="" action="{{ route('movie.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label" for="title">
                            Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Write the Title of the movie">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nationality">
                            Nationality
                        </label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Insert movie nationality">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="release_date">
                            Release Date
                        </label>
                        <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Please sett upp the Release date of the movie">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="cast">
                            Cast
                        </label>
                        <input type="text" max-lenght="100" class="form-control" id="cast" name="cast" placeholder="Please write the cast of the movie">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="cover_path">
                            Cover
                        </label>
                        <input type="text" class="form-control" id="cover_path" name="cover_path" placeholder="Please drag the Cover">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection