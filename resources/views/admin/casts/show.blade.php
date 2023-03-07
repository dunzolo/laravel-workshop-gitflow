@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>Elenco film con {{$cast->name_surname}}</h2>
                    </div>
                    <div>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.casts.index') }}">Torna all'elenco</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-12">
                <h4>Film che appartengono a questo cast:</h4>
                <div class="row">
                    @forelse ($cast->movies as $movie)
                        <div class="col-12 col-md-3">
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h4>{{ $movie->title}}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="{{ route('admin.movies.show', $movie->id)}}" class="btn btn-sm btn-primary">Continua a leggere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h5>Non ci sono film per questo cast</h5>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection