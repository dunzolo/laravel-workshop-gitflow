@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-12">
            <h2>Modify Genre</h2>
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
            <form method="POST" action="{{ route('admin.genres.update') }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="control-label">Genre</label>
                    <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre">
                </div>
                <div class="mt-3 form-group">
                    <button type="submit" class="btn btn-sm btn-secondary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection