@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex justify-content-between">
                <div>
                    <h2>ELENCO DEI FILM</h2>
                </div>
                <div>
                    <a href="{{ route('admin.movies.create') }}" class="btn btn-sm btn-primary">Nuovo film</a>
                </div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">ORIGINAL TITLE</th>
                    <th scope="col">NATIONALITY</th>
                    <th scope="col">RELEASE DATE</th>
                    <th scope="col">VOTE</th>
                    <th scope="col">CAST</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{$movie->id}}</td>
                            <td>
                                <a href="{{ route('admin.movies.show', $movie->id)}}">
                                    <img class="w-25" src="{{$movie->cover_path}}" alt="{{$movie->title}}">
                                </a>
                            </td>
                            <td>{{$movie->title}}</td>
                            <td>{{$movie->original_title}}</td>
                            <td>{{$movie->nationality}}</td>
                            <td>{{$movie->release_date}}</td>
                            <td>{{$movie->vote}}</td>
                            <td>{{$movie->cast}}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-sm btn-info" href="{{ route('admin.movies.show', $movie->id) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-warning ms-2 me-2" href="{{-- {{ route('admin.movie.edit', $movies->id) }} --}}">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <form action="{{ route('admin.movies.destroy', $movie->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection