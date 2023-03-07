@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>ELENCO GENERI</h2>
                </div>
            </div>
            <div class="col-6">
                <div class="float-end">
                    {{-- <a href="{{ route('admin.technologies.create') }}" class="btn btn-sm btn-primary">Aggiungi</a> --}}
                </div>
            </div>
            <hr>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th>Azioni</th>
                    </thead>
                    <tbody>
                        @foreach ($genres as $genre)
                        <tr>
                            <td>{{ $genre->id}}</td>
                            <td>{{ $genre->name}}</td>
                            <td>{{ $genre->slug}}</td>
                            <td>
                                <a href="{{ route('admin.genres.show', $genre->id)}}" title="Visualizza" class="btn btn-sm btn-square btn-primary">
                                    <i class="fas fa-eye text-black"></i>
                                </a>
                                {{-- <a href="{{ route('admin.technologies.edit', $technology->slug)}}" title="Modifica" class="btn btn-sm btn-square btn-warning">
                                <i class="fas fa-edit text-black"></i>
                                </a> --}}
                                {{-- <form class="d-inline-block" action="{{ route('admin.technologies.destroy', $technology->slug )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-square btn-danger delete-button" type="submit">
                                    <i class="fas fa-trash text-black"></i>
                                </button>
                                </form> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection