@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
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
                  </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{$movie->id}}</td>
                            <td>
                                <a href="{{-- {{ route('movies.show',['movie' => $movie->id])}} --}}">
                                    <img class="w-25" src="{{$movie->cover_path}}" alt="{{$movie->title}}">
                                </a>
                            </td>
                            <td>{{$movie->title}}</td>
                            <td>{{$movie->original_title}}</td>
                            <td>{{$movie->nationality}}</td>
                            <td>{{$movie->release_date}}</td>
                            <td>{{$movie->vote}}</td>
                            <td>{{$movie->cast}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection