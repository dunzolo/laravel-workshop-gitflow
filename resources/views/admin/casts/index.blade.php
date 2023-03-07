@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="d-flex justify-content-between">
                    <div>
                        <h2>ELENCO CAST</h2>
                    </div>
                    <div>
                        <a href="{{ route('admin.casts.create') }}" class="btn btn-sm btn-primary">Aggiungi</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Nome e Cognome</th>
                        <th>Slug</th>
                        <th>Azioni</th>
                    </thead>
                    <tbody>
                        @foreach ($casts as $cast)
                            <tr>
                                <td>{{ $cast->id }}</td>
                                <td>{{ $cast->name_surname }}</td>
                                <td>{{ $cast->slug}}</td>
                                <td>
                                    <a href="{{ route('admin.casts.show', $cast->id)}}" title="Visualizza" class="btn btn-sm btn-square btn-primary">
                                        <i class="fas fa-eye text-black"></i>
                                    </a>
                                    <a href="{{ route('admin.casts.edit', $cast->slug)}}" title="Modifica" class="btn btn-sm btn-square btn-warning">
                                        <i class="fas fa-edit text-black"></i>
                                    </a>
                                    <form class="d-inline-block" action="{{ route('admin.casts.destroy', $cast->slug )}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-square btn-danger delete-button" type="submit">
                                        <i class="fas fa-trash text-black"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection