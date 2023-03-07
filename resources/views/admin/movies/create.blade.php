@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Add a New Movie</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form class="" action="{{ route('admin.movies.store') }}" method="POST">
                    @csrf
                    <div class="form-group my-3">
                        <label class="control-label" for="title">
                            Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Write the Title of the movie">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="title">
                            Original title
                        </label>
                        <input type="text" class="form-control" id="original_title" name="original_title" placeholder="Write the original title of the movie">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="title">
                            Vote
                        </label>
                        <input type="text" class="form-control" id="vote" name="vote" placeholder="Write the Vote of the movie">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="nationality">
                            Nationality
                        </label>
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Insert movie nationality">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="release_date">
                            Release Date
                        </label>
                        <input type="date" class="form-control" id="release_date" name="release_date" placeholder="Please sett upp the Release date of the movie">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="cast">
                            Cast
                        </label>
                        <input type="text" max-lenght="100" class="form-control" id="cast" name="cast" placeholder="Please write the cast of the movie">
                    </div>
                    <div class="form-group my-3">
                        <label class="control-label" for="cover_path">
                            Cover
                        </label>
                        <input type="text" class="form-control" id="cover_path" name="cover_path" placeholder="Please copy the Cover link">
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