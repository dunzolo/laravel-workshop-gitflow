@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Add a Genre</h2>
            </div>
        </div>
        <div class="row mt-4">
            @if($errors-any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="col-12">
                <form action="{{ route('admin.genres.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">
                            Genre
                        </label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-lg btn-secondary">Save</button>
                    </div>
                    @error('genre')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</div>
@endsection