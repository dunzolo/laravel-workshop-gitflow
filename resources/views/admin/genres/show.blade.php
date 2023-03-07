@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>DETTAGLIO GENERE</h2>
                    </div>
                    <div>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.genres.index') }}">Torna all'elenco</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-12">
                <label class="d-block"><strong>Nome</strong></label>
                <p>{{ $genre->name }}</p>
                <label class="d-block"><strong>Slug</strong></label>
                <p>{{ $genre->slug }}</p>
            </div>
        </div>
    </div>
@endsection